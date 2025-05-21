@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-light text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to Bloguer</h1>
        <p class="lead text-muted">Explore insights, tutorials, and stories from the tech world.</p>
    </div>
</section>

<!-- Featured Categories -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Popular Categories</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card border-1 shadow-sm p-3">
                    <h5>Technology</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-1 shadow-sm p-3">
                    <h5>Design</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-1 shadow-sm p-3">
                    <h5>Marketing</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-1 shadow-sm p-3">
                    <h5>Career</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Posts -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Latest Blog Posts</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('/images/blog-1.png')}}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Future of AI in Web Development</h5>
                        <p class="card-text text-muted">By Jane Smith • May 18, 2025</p>
                        <p class="card-text">AI is revolutionizing how developers build and scale web apps. Let’s
                            explore trends and tools…</p>
                        <a href="{{ route('blogs.show', ['id' => 1]) }}" class="btn btn-sm btn-outline-primary">Read
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('/images/blog-1.png')}}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Mastering JavaScript in 2025</h5>
                        <p class="card-text text-muted">By John Doe • May 17, 2025</p>
                        <p class="card-text">Learn about the latest features, frameworks, and best practices in modern
                            JavaScript.</p>
                        <a href="{{ route('blogs.show', ['id' => 1]) }}" class="btn btn-sm btn-outline-primary">Read
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('/images/blog-1.png')}}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">UX Design Tips for Developers</h5>
                        <p class="card-text text-muted">By Sarah Lee • May 15, 2025</p>
                        <p class="card-text">Good UI is not enough. Discover UX principles that developers should
                            understand and apply.</p>
                        <a href="{{ route('blogs.show', ['id' => 1]) }}" class="btn btn-sm btn-outline-primary">Read
                            More</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center mt-4">
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">View All Posts</a>
        </div>
    </div>
</section>

@endsection