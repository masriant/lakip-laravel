@extends('layouts.main')

@section('container')
<h5>Welcome, {{ auth()->user()->name }}</h5>
<h3>Halaman Team</h3>
@endsection
