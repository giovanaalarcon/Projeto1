@extends('layouts.main')

@section('title', 'Professores')

@section('content')
    <h1>Professores</h1>
    @if($busca != '')
        <p>Resultados relacionados a {{ $busca }}</p>
    @endif
@endsection