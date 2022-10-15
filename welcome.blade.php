@extends('layouts.main')

@section('title', 'Home')

@section('content')


<h1 class="my-4">Projeto</h1>

<div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card h-100">
     <img src="/img/alunos.webp" class="card-img-top h-75" alt="alunos">
      <div class="card-body">
        <h5 class="card-title">Alunos PUC Campinas</h5>
        <p class="card-text">Acesse a lista de alunos da Universidade PUC Campinas.</p>
        <a href="/students" class="btn btn-primary">Lista de Alunos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/professores.jpg" class="card-img-top h-75" alt="professores">
      <div class="card-body">
        <h5 class="card-title">Professores PUC Campinas</h5>
        <p class="card-text">Acesse a lista de professores da Universidade PUC Campinas.</p>
        <a href="#" class="btn btn-primary">Lista de Professores</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/filme.jpg" class="card-img-top h-75" alt="filmes">
      <div class="card-body">
        <h5 class="card-title">Filmes</h5>
        <p class="card-text">Acesse os filmes assistidos pelos alunos da PUC Campinas.</p>
        <a href="#" class="btn btn-primary">Lista de Filmes</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/materias.jpg" class="card-img-top h-75" alt="materias">
      <div class="card-body">
        <h5 class="card-title">Matérias</h5>
        <p class="card-text">Acesse as matérias dos cursos da PUC Campinas.</p>
        <a href="#" class="btn btn-primary">Lista de Matérias</a>
      </div>
    </div>
  </div>
</div>

@endsection
