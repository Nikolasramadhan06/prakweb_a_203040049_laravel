
@extends('layouts.main')

@section ('container')
<article>
<h1 class="mb5">{{  $post->title }}</h1>

<p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-5">{{ $post->title }}</h2>
            <p>By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
</article>

    @if ($post->image)
        <div style="max-height: 400px; overflow:hidden">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                 class="img-fluid">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
             alt="{{ $post->category->name }}" class="img-fluid mt-3">
    @endif

            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>

            <a href="/blog" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>

@endsection

