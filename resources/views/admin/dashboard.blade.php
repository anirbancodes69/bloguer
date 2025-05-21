@extends('layouts.admin')

@section('admin')
<!-- Main Content -->
<div class="flex-grow-1 p-4">
    <h1>Welcome to Admin Dashboard</h1>
    <p>This is the main admin panel. Here you can manage blog posts, users, and site settings.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Posts</h5>
                    <p class="card-text">10</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection