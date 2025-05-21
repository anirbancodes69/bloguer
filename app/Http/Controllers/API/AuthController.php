<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\RefreshToken;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:16'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User created successfully! You can login now.',
            'user' => $user
        ]);
    }

    public function login(Request $request)
    {
        $creds = $request->only('email', 'password');

        $validator = Validator::make($creds, [
            'email' => 'required|string',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Failed',
                'error' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }


        if (!$accessToken = JWTAuth::attempt($creds)) {
            return response()->json([
                'message' => 'Invalid Creds'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $refreshToken = $this->createRefreshToken($request);
        return $this->respondWithToken($accessToken, $refreshToken);
    }

    public function logout(Request $request)
    {
        JWTAuth::invalidate();
        Auth::logout();

        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }

    public function createRefreshToken(Request $request)
    {
        $refreshToken = bin2hex(random_bytes(50));

        $refreshTokenTTL = (int) config('jwt.refresh_ttl');

        $expiresAt = now()->addMinutes($refreshTokenTTL);

        RefreshToken::create([
            'user_id' => Auth::user()->id,
            'token_hash' => hash('sha256', $refreshToken),
            'expires_at' => $expiresAt,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent()
        ]);

        return $refreshToken;
    }

    public function respondWithToken($accessToken, $refreshToken)
    {
        $cookie = cookie('refresh_token', $refreshToken, (int) config('jwt.refresh_ttl'), '/', config('app.cookie_domain'), config('app.env') === 'production', true, false, 'Strict');

        return response()->json([
            'access_token' => $accessToken,
            'type' => 'bearer',
            'expires_in' => (int) config('jwt.ttl') * 60
        ])->withCookie($cookie);
    }

    public function me()
    {
        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return response()->json([
                'message' => "User Not Found",
                'error' => $e
            ], 404);
        }

        return response()->json(['user' => $user]);
    }

    public function refreshToken(Request $request)
    {
        $refreshToken = $request->cookie('refresh_token');

        if (!$refreshToken) {
            return response()->json([
                'error' => 'Refresh token missing'
            ], Response::HTTP_UNAUTHORIZED);
        }

        // Validate refresh token
        $tokenHash = hash('sha256', $refreshToken);

        $storedToken = RefreshToken::where('token_hash', $tokenHash)
            ->where('expires_at', '>', now())
            ->where('is_revoked', false)
            ->first();

        if (!$storedToken) {
            return response()->json([
                'error' => 'Invalid refresh token'
            ], Response::HTTP_UNAUTHORIZED);
        }


        // Get associated user with fresh data
        $user = User::findOrFail($storedToken->user_id);

        // Security: Validate request source consistency
        if ($storedToken->ip_address !== $request->ip()) {
            return response()->json([
                'error' => 'Suspicious location detected',
                'code' => 'IP_MISMATCH'
            ], Response::HTTP_FORBIDDEN);
        }

        // Revoke used token
        $storedToken->update(['is_revoked' => true]);

        $token = JWTAuth::getToken();
        JWTAuth::invalidate($token, true);

        // Generate new access token with fresh claims
        $newAccessToken = JWTAuth::fromUser($user);

        $newRefreshToken = $this->createRefreshToken($request);

        return $this->respondWithToken($newAccessToken, $newRefreshToken);
    }
}
