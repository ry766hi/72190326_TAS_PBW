@extends('layouts.main')

@section('container')
    <h1>{{ $nim }}</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
@endsection