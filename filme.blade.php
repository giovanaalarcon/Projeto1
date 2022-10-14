@extends('layouts.main')

@section('title', 'Filmes')

@section('content')
    <h1>Filmes</h1>
    @if($id != null)
        <p> Filmes de categoria: {{ $id }}</p>
    @endif

@endsection