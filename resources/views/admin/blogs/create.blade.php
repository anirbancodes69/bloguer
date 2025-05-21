@extends('layouts.admin')

@section('admin')
<!-- Main Content -->
<div class="flex-grow-1 p-4">
    <h2>Create New Blog</h2>
    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter blog title">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category">
                <option selected disabled>Select a category</option>
                <option value="web">Web Development</option>
                <option value="design">Design</option>
                <option value="marketing">Marketing</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" placeholder="Enter tags (comma separated)">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Blog Image</label>
            <input class="form-control" type="file" id="image">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="5" placeholder="Enter blog content"></textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="publish">
            <label class="form-check-label" for="publish">
                Publish Now
            </label>
        </div>

        <button type="submit" class="btn btn-success">Create Blog</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection