@extends('layouts.main')

@section('title',  'Projeto')

@section('content')

@foreach($acrescentar as $acrescenta)
    <p>{{ $acrescenta->title}} --  {{$acrescenta->description}}</p>
@endforeach


 @endsection