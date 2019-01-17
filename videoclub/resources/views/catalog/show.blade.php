@extends('layouts.master')
@section('title', 'show')
@section('content')
	<h1>Vista detalle de película</h1>

	<div class="row">
		<div class="col-sm-4">
        	<img src="{{$arrayPeliculas['poster']}}"/>
		</div>
		<div class="col-sm-8">
			<h4 style="min-height:45px;margin:5px 0 10px 0">
               {{$arrayPeliculas['title']}}
            </h4>
            <p>Año: {{$arrayPeliculas['year']}}</p>
            <p>Director: {{$arrayPeliculas['director']}}</p>
        	<p>Resumen: {{$arrayPeliculas['synopsis']}}</p>
        	@if ($arrayPeliculas['rented'] == false)
        		<p>Estado: La pelicula está disponible</p>
        		<a class="btn btn-primary" href="#" role="button">Alquilar pelicula</a>
        	@else
        		<p>Estado: Pelicula actualmente alquilada</p>
        		<a class="btn btn-danger" href="#" role="button">Devolver pelicula</a>
        	@endif
        	<a class="btn btn-warning" href="{{ url('/catalog/edit/{$id}') }}" role="button">Editar pelicula</a>
        	<a class="btn btn-default" href="{{ url('/catalog/index') }}" role="button">Volver al listado</a>
		</div>
	</div>

@endsection