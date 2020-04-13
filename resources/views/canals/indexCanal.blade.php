@extends('layouts.app')

@section('content')
<div class="container">

	@if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p style="margin-bottom:0px;">{{ $message }}</p>
      </div>
  	@endif

	<div class="col-md-12">
		<u><h3>INFORMACIÓ CANALS</h3></u><br>
		<div>
			<a href="{{route('canal.create')}}" class="btn btn-success">Afegir canal</a>
			<a style="float:right;" href="{{route('home')}}" class="btn btn-secondary">Volver</a>
			<br/><br/>
		</div>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>ID Canal</th>
					<th> Nom Canal</th>
					<th>Logotip Canal</th>
					<th width="220px"></th>
				</tr>
			</thead>

			@foreach($canals as $canal)
			<tbody>
				<tr>
					<th scope="row">{{$canal->id}}</th>
					<td>{{$canal->nomCanal}}</td>
					<td><img src="{{ URL::to('/') }}/images/{{ $canal -> logotipCanal }}" class="rounded" width="70" /></td>
					<td>
						<a class="btn btn-primary" href="{{route('canal.edit', $canal->id)}}" >Editar</a>
												
						<form method="POST" action="{{route('canal.destroy', $canal->id)}}" style="display:inline;">
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