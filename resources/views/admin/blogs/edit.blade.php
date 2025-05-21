@extends('layouts.admin')

@section('admin')
<!-- Main Content -->
<div class="flex-grow-1 p-4">
    <h2>Edit Blog #{{ $id }}</h2>
    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" value="Getting Started with Laravel">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category">
                <option value="web" selected>Web Development</option>
                <option value="design">Design</option>
                <option value="marketing">Marketing</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" value="laravel,php">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Blog Image</label>
            <input class="form-control" type="file" id="image">
            <small class="text-muted">Current image: laravel.png</small>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="5">Laravel is a powerful PHP framework...</textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="publish" checked>
            <label class="form-check-label" for="publish">
                Publish
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Update Blog</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection