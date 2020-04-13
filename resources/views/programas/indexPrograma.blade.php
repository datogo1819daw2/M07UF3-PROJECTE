@extends('layouts.app')

@section('content')
<div class="container">

	@if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p style="margin-bottom:0px;">{{ $message }}</p>
      </div>
  	@endif

	<div class="col-md-12">
		<u><h3>INFORMACIÓ PROGRAMAS</h3></u><br>
		<div>
			<a href="{{route('programa.create')}}" class="btn btn-success">Afegir programa</a>
			<a style="float:right;" href="{{route('home')}}" class="btn btn-secondary">Volver</a>
			<br/><br/>
		</div>
		<table class="table">
			<thead class="thead-dark">
				<tr>
                    <th>ID</th>
                    <th>Nom </th>
                    <th>Descripció</th>
                    <th>Tipus</th>
                    <th>Classificació</th>
                    <th>Canal</th>
					<th width="220px"></th>
				</tr>
			</thead>

			@foreach($programas as $programa)
			<tbody>
				<tr>
					<td>{{$programa->id}}</td>
					<td>{{$programa->nomPrograma}}</td>
                    <td>{{$programa->descPrograma}}</td>
					<td>{{$programa->tipoPrograma}}</td>
                    <td>{{$programa->clasPrograma}}</td>
					<td>{{$programa->idCanal}}</td>
					<td>
						<a class="btn btn-primary" href="{{route('programa.edit', $programa->id)}}" >Editar</a>
												
						<form method="POST" action="{{route('programa.destroy', $programa->id)}}" style="display:inline;">
						@csrf
						@method('DELETE')
							<button type="submit" class="btn btn-danger">Borrar</button>		
						</form>							
						
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>	
</div>
@endsection