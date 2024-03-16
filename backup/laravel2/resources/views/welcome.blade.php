@extends('layouts.app')

@section('content')
<section>
        <h1>Singled Out Products</h1>
        <!-- Display singled out products here -->
        @foreach ($singledOutProducts as $product)
            <!-- Add HTML code to display each singled out product -->
        @endforeach
    </section>

    <section>
        <h1>Categories</h1>
        <!-- Display category links as cards here -->
        <div>
            @foreach ($categories as $category)
                <!-- Add HTML code to display each category card -->
            @endforeach
        </div>
    </section>

    <section>
        <h1>Last Blog Posts</h1>
        <!-- Display last blog posts here -->
        @foreach ($lastBlogPosts as $post)
            <!-- Add HTML code to display each blog post -->
        @endforeach
    </section>
@endsection
