@extends('layouts.main')

@section('title', 'Home')

@section('content')


<div class="d-grid gap-3">
    <div class="p-2 bg-light border">Grid item 1</div>
    <div class="bg-danger p-2 text-dark bg-opacity-35">This is 35% opacity success background</div>
    <div class="p-2 bg-light border">Grid item 3</div>
</div>

<div class="mb-4 mt-4">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control border-info" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
    Changing border color and width
</div>
<div class="container-fluid">100% wide until small breakpoint</div>


<div class="card w-25">
    <img src="/img/perfil-coelho.webp" class="card-img-top" alt="coelho">

    <div class="card-body">
        <h5 class="card-title">Alunos</h5>
        <p class="card-text">Click no botão abaixo para ver a lista dos alunos matriculados na faculdade PUC Campinas</p>
        <a href="/students" class="btn btn-primary">Lista de Alunos</a>
    </div>
</div>


@endsection