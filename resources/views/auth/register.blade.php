<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - Bloguer</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 420px;">
            <h3 class="mb-4 text-center">Create an Account</h3>

            <!-- Google Signup Button -->
            <a href="#" class="btn btn-outline-danger w-100 mb-3">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" width="20"
                    class="me-2" />
                Sign up with Google
            </a>

            <div class="text-center my-2">or</div>

            <!-- Register Form -->
            <form>
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="John Doe" required />
                </div>
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="you@example.com" required />
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Create password" required />
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>

            <div class="text-center mt-3">
                <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
            </div>
        </div>
    </div>

</body>

</html>