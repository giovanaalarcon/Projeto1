@extends('layouts.main')

@section('title', 'Materias')

@section('content')
    <h1>Materias</h1>
    @if($busca != '')
        <p>Resultados relacionados a {{ $busca }}</p>
    @endif
@endsection