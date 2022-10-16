@extends('layouts.main')

@section('title', 'Filmes')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Filmes</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">CATEGORIA</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->category_id }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


<a class="btn btn-primary" href="/create" role="button"> Adicionar Novo Filme</a>

<div id="movies-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($movies as $movie)
        <div class="card col-md-4">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->name }}</h5>
                <p class="card-text"> Categoria: {{ $movie->category_id }}</p>
                <a href="#" class="btn btn-dark">Mais Informações</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@foreach($movies as $movie)

<p class="card-text"> Categoria: {{ $movie->category->name }}</p>

@endforeach


<a href="https://www.learn-laravel.cf/category/1" class="btn btn-dark">Mais Informações</a>


@endsection