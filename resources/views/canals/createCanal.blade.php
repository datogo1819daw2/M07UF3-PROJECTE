@extends('layouts.app')

@section('content')
<div class="container">
  <u><h3>CREACIÓ NOU CANAL</h3></u><br>
  <form action="{{route('canal.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="nomCanal">Nom canal:</label>
      <input type="text" class="form-control" name="nomCanal" required><br>
      <label for="logotipCanal">Logotip Canal:</label>
      <input type="file" class="form-control-file" name="logotipCanal" required>
    </div>
    <button type="submit" class="btn btn-success">Crear canal</button>
    <a  href="{{route('canal.index')}}" class="btn btn-secondary">Volver</a>
  </form>
</div>
@endsection