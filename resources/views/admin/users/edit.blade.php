@extends('layouts.admin')

@section('admin')
<div class="container mt-5">
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mb-3">← Back to Users</a>
    <h2>Edit User #{{ $id }}</h2>

    <form method="POST" action="{{ route('admin.users.update', $id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="Jane Doe" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="jane@example.com" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-select">
                <option value="user" selected>User</option>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection