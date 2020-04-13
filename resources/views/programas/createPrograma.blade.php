@extends('layouts.app')

@section('content')
<div class="container">
  <u><h3>CREACIÓ NOU PROGRAMA</h3></u><br>
  <form action="{{route('programa.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="nomPrograma">Nom programa:</label>
      <input type="text" class="form-control" name="nomPrograma" required><br>
      <label for="descPrograma">Descripció programa:</label>
      <input type="text" class="form-control" name="descPrograma" required><br>
      <label for="tipoPrograma">Tipus programa:</label>
      <select name="tipoPrograma" class="form-control" required>
        <option value="Esports">Esports</option>
        <option value="Noticies">Noticies</option>
        <option value="Documental">Documetal</option>
        <option value="Dibuixos">Dibuixos animats</option>
        <option value="Reality Show">Reality Show</option>
      </select><br>
      <label for="clasPrograma">Classificació programa:</label>
      <select name="clasPrograma" class="form-control" required>
        <option value="Tots els públics">Tots els públic</option>
        <option value="+3">+3</option>
        <option value="+7">+7</option>
        <option value="+13">+13</option>
        <option value="+18">+18</option>
      </select><br>
      <label for="idCanal">Canal:</label>
      <select name="idCanal" class="form-control">
        @foreach($canal as $canals)
          <option value="{{$canals->id}}">{{$canals->nomCanal}}</option>
        @endforeach
      </select><br>
    </div>
    <button type="submit" class="btn btn-success">Crear canal</button>
    <a  href="{{route('programa.index')}}" class="btn btn-secondary">Volver</a>
  </form>
</div>
@endsection