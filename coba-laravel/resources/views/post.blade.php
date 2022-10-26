
@extends('layouts.main')

@section ('container')
<article>
<h1 class="mb5">{{  $post->title }}</h1>

{!! $post->body !!}
</article>

<a href="/blog">Back to Post</a>
@endsection

