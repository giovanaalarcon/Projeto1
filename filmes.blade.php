@extends('layouts.main')

@section('title', 'Filmes')

@section('content')
    <h1>Filmes</h1>
    @if($busca != '')
        <p>Resultados relacionados a {{ $busca }}</p>
    @endif
@endsection