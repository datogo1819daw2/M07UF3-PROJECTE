@extends('layouts.app')

@section('content')
<div class="container">

	@if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p style="margin-bottom:0px;">{{ $message }}</p>
      </div>
  	@endif

	<div class="col-md-12">
		<u><h3>INFORMACIÓ GRAELLAS</h3></u><br>
		<div>
			<a href="{{route('graella.create')}}" class="btn btn-success">Afegir graella</a>
			<a style="float:right;" href="{{route('home')}}" class="btn btn-secondary">Volver</a>
			<br/><br/>
		</div>
        
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>ID Graella</th>
					<th>Canal</th>
            		<th>Programa</th>
                    <th>Dia</th>
					<th>Hora</th>
					<th width="220px"></th>
				</tr>
			</thead>
			@foreach($graellas as $graella) 
				@foreach($graella->programas as $programa) 
       				@foreach ($canals as $canal)
            			@if($programa->idCanal == $canal->id)
							<tbody>
								<tr>
									<td>{{$graella -> id}}</td>
									<td>{{$canal -> nomCanal}}</td>
									<td>{{$programa -> nomPrograma}}</td>
									<td>{{$graella -> dia}}</td>
									<td>{{$graella -> hora}}</td>
									<td>												
										<form method="POST" action="{{route('graella.destroy', $graella->id)}}" style="display:inline;">
										@csrf
										@method('DELETE')
											<button type="submit" class="btn btn-danger">Borrar</button>		
										</form>							
										
									</td>
								</tr>
							</tbody>
            			@endif
        			@endforeach
   				@endforeach
			@endforeach
		</table>
	</div>	
</div>
@endsection