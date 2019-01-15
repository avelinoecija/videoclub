@extends('master')
@section('content')
	<h1>Nosotros</h1>
	<p>Mi nombre es {{$nombreenviado}}</p>
@if ($nombreenviado='Avelino')
	<p>Hola Avelino</p>
@else
	<p>Hola desconocido</p>
@endif
@for ($i = 0; $i < 10; $i++)
	The current value is {{ $i }}</br>
@endfor
@endsection