@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Digital++</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a style="text-decoration: none;" href="{{route('canal.index')}}"><button style="margin-bottom: 7px;" type="button" class="btn btn-secondary btn-lg btn-block">Crear Canal</button></a>
                        <a style="text-decoration: none;" href="{{route('programa.index')}}"><button style="margin-bottom: 7px;" type="button" class="btn btn-secondary btn-lg btn-block">Crear Programa</button></a>
                        <a style="text-decoration: none;" href="{{route('graella.index')}}"><button style="margin-bottom: 7px;" type="button" class="btn btn-secondary btn-lg btn-block">Crear Graella</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
