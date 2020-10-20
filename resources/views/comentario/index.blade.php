@extends('layout')
@section('content')
<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista de comentarios</h2>
        </div>
              

    </div>
    <div>

    </div>
        <div>
        <a class="btn btn-primary" href="{{ route('comentarios.create') }}">asdds </a>
        </div>
    @foreach($comentarios as $comentario)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-muted"> </h6>
            <p class="card-text">{{ $comentario->comentario}} </p>
            <a href="#" class="card-link">{{ $comentario->created_at }}</a>
            <a href="#" class="card-link">{{ $comentario->usuario->flatten()->pluck('name')->where('id', '===', 'user_id') }}</a>
            
        </div>
    </div>


    @endforeach
    @endsection