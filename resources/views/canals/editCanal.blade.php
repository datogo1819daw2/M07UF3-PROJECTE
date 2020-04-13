@extends('layouts.app')

@section('content')
<div class="container">
  <u><h3>EDITAR CANAL</h3></u><br>
  <form method="POST" action="{{route('canal.update', $canal->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-group">
      <label for="nomCanal">Nom canal:</label>
      <input type="text" class="form-control" name="nomCanal" value="{{$canal->nomCanal}}"><br>
      <label for="logotipCanal">Logotip Canal:</label>
      <input type="file" class="form-control-file" name="logotipCanal" value="{{$canal->logotipCanal}}" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a  href="{{route('canal.index')}}" class="btn btn-secondary">Volver</a>
  </form>
</div>
@endsection