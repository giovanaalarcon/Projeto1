@extends('layouts.main')

@section('title', 'Home')

@section('content')


<h1 class="my-4">Banco de Dados Relacional</h1>
</p>Lista de Alunos,Filmes,Professores,Materias</p>


<div id="carouselExampleIndicators" class="carousel slide h-25" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="/img/alunos.webp" class="img-fluid h-25" height= "25%" alt="alunos">
    </div>
    <div class="carousel-item">
      <img src="/img/professores.jpg" class="img-fluid h-25" alt="professores">
    </div>
    <div class="carousel-item">
      <img src="/img/filme.jpg" class="img-fluid h-25" alt="filmes">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="/img/alunos.webp" class="card-img-top h-75" alt="alunos">
      <div class="card-body">
        <h5 class="card-title">Alunos PUC Campinas</h5>
        <p class="card-text">Acesse a lista de alunos da Universidade PUC Campinas.</p>
        <a href="#" class="btn btn-primary">Lista de Alunos</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/professores.jpg" class="card-img-top h-50" alt="professores">
      <div class="card-body">
        <h5 class="card-title">Professores PUC Campinas</h5>
        <p class="card-text">Acesse a lista de professores da Universidade PUC Campinas.</p>
        <a href="#" class="btn btn-primary">Lista de Professores</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/filme.jpg" class="card-img-top h-50" alt="filmes">
      <div class="card-body">
        <h5 class="card-title">Filmes</h5>
        <p class="card-text">Acesse os filmes assistidos pelos alunos da PUC Campinas.</p>
        <a href="#" class="btn btn-primary">Lista de Filmes</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>


@endsection