<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    @vite(['resources/css/app.css'])

</head>

<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card shadow p-4" style="min-width: 400px;">
            <h3 class="mb-3 text-center">Admin Login</h3>

            @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="#">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</body>

</html>