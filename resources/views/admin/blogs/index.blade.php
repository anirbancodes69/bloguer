@extends('layouts.admin')

@section('admin')
<!-- Main Content -->
<div class="flex-grow-1 p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Blogs</h2>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add New Blog</a>
    </div>
    @if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Published</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Static data -->
            <tr>
                <td>1</td>
                <td>Getting Started with Laravel</td>
                <td>Web Development</td>
                <td>laravel,php</td>
                <td>Yes</td>
                <td>
                    <a href="{{ route('admin.blogs.edit', ['id' => 1]) }}" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal1">Delete</button>

                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bootstrap Basics</td>
                <td>Design</td>
                <td>bootstrap,css</td>
                <td>No</td>
                <td>
                    <a href="{{ route('admin.blogs.edit', ['id' => 2]) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteModal1" tabindex="-1" aria-labelledby="deleteModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('admin.blogs.delete', 1) }}">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this blog post?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection