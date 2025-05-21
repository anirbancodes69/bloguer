@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-light py-5 text-center">
    <div class="container">
        <h1 class="display-5 fw-bold">Explore Our Blog</h1>
        <p class="lead text-muted">Search, filter, and discover insightful posts</p>
    </div>
</header>

<!-- Search and Filters -->
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Search blog posts..." />
        </div>
        <div class="col-md-4">
            <select class="form-select">
                <option selected>Filter by Category</option>
                <option>Technology</option>
                <option>Design</option>
                <option>Marketing</option>
                <option>Career</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-select">
                <option selected>Filter by Tag</option>
                <option>AI</option>
                <option>Bootstrap</option>
                <option>UX</option>
                <option>React</option>
            </select>
        </div>
    </div>

    <!-- Posts Grid -->
    <div class="row g-4">

        <!-- Sample Blog Card -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <img src="{{asset('/images/blog-1.png')}}" class="card-img-top" alt="Blog Image" />
                <div class="card-body">
                    <h5 class="card-title">Mastering JavaScript in 2025</h5>
                    <p class="card-text text-muted mb-1">
                        <small>By John Doe | April 18, 2025</small>
                    </p>
                    <span class="badge bg-info mb-2">Technology</span>
                    <p class="card-text">JavaScript continues to evolve—learn the latest features, frameworks, and tips
                        to become a better front-end developer in 2025...</p>

                    <div class="mb-2">
                        <span class="badge bg-primary">JavaScript</span>
                        <span class="badge bg-success">ESNext</span>
                        <span class="badge bg-warning text-dark">Frontend</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('blogs.show', ['id' => 1]) }}" class="btn btn-outline-primary btn-sm">Read
                            more</a>
                        <span class="text-muted">👍 100 Likes</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sample Blog Card -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <img src="{{asset('/images/blog-1.png')}}" class="card-img-top" alt="Blog Image" />
                <div class="card-body">
                    <h5 class="card-title">Mastering JavaScript in 2025</h5>
                    <p class="card-text text-muted mb-1">
                        <small>By John Doe | April 18, 2025</small>
                    </p>
                    <span class="badge bg-info mb-2">Technology</span>
                    <p class="card-text">JavaScript continues to evolve—learn the latest features, frameworks, and tips
                        to become a better front-end developer in 2025...</p>

                    <div class="mb-2">
                        <span class="badge bg-primary">JavaScript</span>
                        <span class="badge bg-success">ESNext</span>
                        <span class="badge bg-warning text-dark">Frontend</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('blogs.show', ['id' => 1]) }}" class="btn btn-outline-primary btn-sm">Read
                            more</a>
                        <span class="text-muted">👍 100 Likes</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sample Blog Card -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <img src="{{asset('/images/blog-1.png')}}" class="card-img-top" alt="Blog Image" />
                <div class="card-body">
                    <h5 class="card-title">Mastering JavaScript in 2025</h5>
                    <p class="card-text text-muted mb-1">
                        <small>By John Doe | April 18, 2025</small>
                    </p>
                    <span class="badge bg-info mb-2">Technology</span>
                    <p class="card-text">JavaScript continues to evolve—learn the latest features, frameworks, and tips
                        to become a better front-end developer in 2025...</p>

                    <div class="mb-2">
                        <span class="badge bg-primary">JavaScript</span>
                        <span class="badge bg-success">ESNext</span>
                        <span class="badge bg-warning text-dark">Frontend</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('blogs.show', ['id' => 1]) }}" class="btn btn-outline-primary btn-sm">Read
                            more</a>
                        <span class="text-muted">👍 100 Likes</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sample Blog Card -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <img src="{{asset('/images/blog-1.png')}}" class="card-img-top" alt="Blog Image" />
                <div class="card-body">
                    <h5 class="card-title">Mastering JavaScript in 2025</h5>
                    <p class="card-text text-muted mb-1">
                        <small>By John Doe | April 18, 2025</small>
                    </p>
                    <span class="badge bg-info mb-2">Technology</span>
                    <p class="card-text">JavaScript continues to evolve—learn the latest features, frameworks, and tips
                        to become a better front-end developer in 2025...</p>

                    <div class="mb-2">
                        <span class="badge bg-primary">JavaScript</span>
                        <span class="badge bg-success">ESNext</span>
                        <span class="badge bg-warning text-dark">Frontend</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('blogs.show', ['id' => 1]) }}" class="btn btn-outline-primary btn-sm">Read
                            more</a>
                        <span class="text-muted">👍 100 Likes</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more blog cards here -->

    </div>

    <!-- Pagination -->
    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>
@endsection