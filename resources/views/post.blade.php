@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $post->title }}</h1>
<p>By. Masrianto in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{{-- <article> --}}
    {{-- <h2>{{ $post->title }}</h2> --}}
    {{-- <h5>{{ $post["author"] }}</h5> --}}
    {!! $post->body !!}
{{-- </article> --}}

<a href="/posts">Back to Posts</a>
@endsection
