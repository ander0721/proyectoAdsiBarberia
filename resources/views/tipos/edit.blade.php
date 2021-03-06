@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar tipo producto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tipo.index') }}"> volver</a>
        </div>
    </div>
</div>
   


<form action="{{ route('tipo.update', $tipo->idT) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre tipo producto:</strong>   
                <input type="text" name="nombreT" class="form-control" value="{{ $tipo->nombreT }}">
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>
   
</form>
@endsection