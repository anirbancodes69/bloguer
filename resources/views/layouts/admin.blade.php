<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css'])

</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h4 class="mb-4">Admin Panel</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.blogs.index') }}">Manage Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.users.index') }}">Users</a>
                </li>
            </ul>
        </div>

        @yield('admin')

    </div>

    @vite(['resources/js/app.js'])

</body>

</html>