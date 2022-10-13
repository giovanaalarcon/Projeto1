@extends('layouts.main')

@section('title', 'Alunos')

@section('content')

<h1>Estudantes</h1>

<div class="card w-25">
    <img src="/img/perfil-coelho.webp" class="card-img-top" alt="coelho">

    <div class="card-body">
        <h5 class="card-title">Alunos</h5>
        <p class="card-text">Click no botão abaixo para ver a lista dos alunos matriculados na faculdade PUC Campinas</p>
        <a href="/" class="btn btn-primary">Home</a>
    </div>
</div>

@endsection