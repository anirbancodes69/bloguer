@extends('layouts.admin')

@section('admin')
<!-- Main Content -->
<div class="flex-grow-1 p-4">
    <h2>Users</h2>
    @if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Static User Example -->
            <tr>
                <td>1</td>
                <td>Jane Doe</td>
                <td>jane@example.com</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('admin.users.edit', ['id' => 2]) }}" class="btn btn-sm btn-primary">Edit</a>
                    <!-- Delete Button -->
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteUserModal1">Delete</button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteUserModal1" tabindex="-1" aria-labelledby="deleteUserLabel1"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('admin.users.delete', 1) }}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Confirm Delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this user?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection