@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to All my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Yakin ingin Hapus? Silahkan klik BATAL atau Semua data ini akan dihapus secara permanen dan tidak dapat dikembalikan!!! ')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>

            {{-- <a href="/posts" class="text-decoration-none my-3">Back to Posts</a> --}}

        </div>
    </div>
</div>

@endsection
