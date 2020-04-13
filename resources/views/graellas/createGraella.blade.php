@extends('layouts.app')

@section('content')
<div class="container">
  <u><h3>CREACIÓ NOVA GRAELLA</h3></u><br>
  <form action="{{route('graella.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="nomCanal">Canal:</label>
      <select name="nomCanal" class="form-control" required>
        @foreach($createCanal as $Ccanal)
                <option value='{{$Ccanal->id}}'>{{$Ccanal-> nomCanal}}</option>  
        @endforeach
      </select><br>
      <label for="nomPrograma">Programa:</label>
      <select name="nomPrograma" class="form-control" required>
        @foreach($createPrograma as $Pprograma)
                <option value='{{$Pprograma->id}}'>{{$Pprograma-> nomPrograma}}</option>  
        @endforeach
      </select><br>
      <label for="dia">Dia:</label>
      <input type="date" class="form-control" name="dia" required><br>
      <label for="hora">Hora:</label>
      <input type="time" class="form-control" name="hora" required><br>
    </div>
    <button type="submit" class="btn btn-success">Crear graella</button>
    <a  href="{{route('graella.index')}}" class="btn btn-secondary">Volver</a>
  </form>
</div>
@endsection