
@extends('layouts.main')

@section ('container')
<article>
<h1 class="mb5">{{  $post->title }}</h1>

<p>By. Nikolas in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>

{!! $post->body !!}
</article>

<a href="/blog">Back to Post</a>
@endsection

