@extends('dashboard.layouts.main2')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Admin Panel</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive col-lg-8">
      {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a> --}}
      <a href="/dashboard/admin/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          {{-- <th scope="col">Title</th> --}}
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          {{-- @foreach ($posts as $post) --}}
          @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            {{-- <td>{{ $post->title }}</td> --}}
            {{-- <td>{{ $post->category->name }}</td> --}}
            <td>{{ $category->name }}</td>
            <td>
                <a href="/dashboard/admin/{{ $category->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/admin/{{ $category->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/admin/{{ $category->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin Hapus? Silahkan klik BATAL atau Semua data ini akan dihapus secara permanen dan tidak dapat dikembalikan!!! ')"><span data-feather="x-circle"></span></button>
                </form>
            </td>
          </tr>

          @endforeach

      </tbody>
    </table>
  </div>
@endsection
