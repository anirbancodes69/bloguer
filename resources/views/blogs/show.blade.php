@extends('layouts.app')

@section('content')
<!-- Post Content -->
<main class="container py-5">
    <article>
        <h1 class="mb-3">The Future of Web Development: Trends to Watch in 2025</h1>
        <p class="text-muted">By <strong>John Doe</strong> | April 15, 2025</p>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="badge bg-info">Category: Technology</span>
            <button class="btn btn-outline-primary btn-sm">
                👍 Like <span class="badge bg-primary">132</span>
            </button>
        </div>

        <img src="{{asset('/images/blog-1.png')}}" alt="Post Cover" class="img-fluid rounded mb-4" />

        <section class="mb-4">
            <p>Web development continues to evolve at a rapid pace. As we enter 2025, developers must stay updated on
                the latest trends, tools, and technologies to remain competitive in the field. In this post, we’ll
                explore some of the key trends shaping the future of web development.</p>
        </section>

        <h2>1. Jamstack Architecture</h2>
        <p>Jamstack offers a faster, more secure, and scalable approach to building websites. It separates the frontend
            from the backend and leverages static site generation, APIs, and CDNs to serve content efficiently.</p>

        <h2>2. AI-Powered Development</h2>
        <p>Tools like GitHub Copilot and ChatGPT are revolutionizing how developers write code, debug, and generate
            documentation. Expect more AI integration in dev tools going forward.</p>

        <blockquote class="blockquote my-4 p-3 bg-light border-start border-primary">
            <p>“AI won’t replace developers, but developers using AI will replace those who don’t.”</p>
        </blockquote>

        <h2>3. WebAssembly and Performance</h2>
        <p>WebAssembly (WASM) allows high-performance code written in languages like C++ and Rust to run in the browser,
            enabling complex applications like games, video editors, and CAD tools to run smoothly on the web.</p>

        <h2>4. Progressive Web Apps (PWAs)</h2>
        <p>PWAs continue to bridge the gap between web and native mobile apps. With offline access, push notifications,
            and installability, they provide a superior user experience.</p>

        <!-- Tags -->
        <div class="my-4">
            <strong>Tags:</strong>
            <span class="badge bg-primary">Web Development</span>
            <span class="badge bg-secondary">AI</span>
            <span class="badge bg-success">Trends</span>
            <span class="badge bg-info">2025</span>
        </div>

        <!-- Comments Section -->
        <div class="mt-5">
            <h3>Comments (2)</h3>

            <!-- Comment 1 -->
            <div class="border p-3 rounded mb-3">
                <div class="d-flex justify-content-between">
                    <strong>Jane Smith</strong>
                    <small class="text-muted">April 16, 2025</small>
                </div>
                <p class="mb-0">This is such a well-written and informative post. Looking forward to more!</p>
            </div>

            <!-- Comment 2 -->
            <div class="border p-3 rounded mb-3">
                <div class="d-flex justify-content-between">
                    <strong>Alex Brown</strong>
                    <small class="text-muted">April 17, 2025</small>
                </div>
                <p class="mb-0">AI is truly changing the way we code. Thanks for the insights!</p>
            </div>

            <!-- Comment Form -->
            <div class="mt-4">
                <h5>Leave a Comment</h5>
                <form>
                    <div class="mb-3">
                        <label for="commentName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="commentName" required />
                    </div>
                    <div class="mb-3">
                        <label for="commentEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="commentEmail" required />
                    </div>
                    <div class="mb-3">
                        <label for="commentText" class="form-label">Comment</label>
                        <textarea class="form-control" id="commentText" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
            </div>
        </div>
    </article>
</main>
@endsection