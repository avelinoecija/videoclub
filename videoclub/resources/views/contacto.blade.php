@extends('master')
@section('title', 'Contacto')
@section('content')
	<h1>Datos de contacto</h1>
	<p>Mi nombre es {{$nombre}}</p>
	<p>Mi apellido es {{$apellido}}</p>
	@if ($nombre='Avelino')
		<p>Hola Avelino</p>
	@else
		<p>Hola desconocido</p>
	@endif
	@for ($i = 0; $i < 10; $i++)
		The current value is {{$i }}</br>
	@endfor
@endsection