@extends('layouts.main')

@section('title', 'Alunos')

@section('content')

<h1>Alunos</h1>

@if($busca != '')
    <p>Resultados relacionados a {{ $busca }}</p>
@endif

@endsection