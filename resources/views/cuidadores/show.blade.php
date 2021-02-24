@extends('layouts.plantilla')

@section('title','Cuidador')

@section('content')
   <h1>Ver registro de cuidador</h1> 
   <h2>{{ $cuidador->nombres }} {{ $cuidador->apellidos }} <small><a href="{{ route('cuidadores.edit', $cuidador) }}">Editar</a></small></h2>
   <p><strong>Identificación: </strong>{{ $cuidador->identificacion }}</p>
   <p><strong>Telefono: </strong>{{ $cuidador->telefono }}</p>
   <form action="{{ route('cuidadores.destroy', $cuidador) }}" method="POST">
      @csrf
      @method('delete')
      <input type="submit" value="Eliminar registro">
   </form><br>
   <a href="{{ route('welcome') }}">Volver a Inicio</a> -
   <a href="{{ route('cuidadores.index') }}">Volver a Cuidadores</a>
@endsection