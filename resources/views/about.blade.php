@extends('layouts.main')

@section('container')
    <h5>About me :</h5>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    {{-- <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"> --}}
    @endsection
