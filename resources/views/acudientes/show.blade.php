@extends('layouts.plantilla')

@section('title','Acudiente')

@section('content')
   <h1>Ver registro de acudiente</h1> 
   <h2>{{ $acudiente->nombres }} {{ $acudiente->apellidos }} <small><a href="{{ route('acudientes.edit', $acudiente) }}">Editar</a></small></h2>
   <p><strong>Identificación: </strong>{{ $acudiente->identificacion }}</p>
   <p><strong>Telefono: </strong>{{ $acudiente->telefono }}</p>
   <p><strong>Ciudad: </strong>{{ $acudiente->ciudad }}</p>
   <p><strong>Dirección: </strong>{{ $acudiente->direccion }}</p>
   <p><strong>Parentesco: </strong>{{ $acudiente->parentesco }}</p>
   <form action="{{ route('acudientes.destroy', $acudiente) }}" method="POST">
      @csrf
      @method('delete')
      <input type="submit" value="Eliminar registro">
   </form><br>
   <a href="{{ route('welcome') }}">Volver a Inicio</a> -
   <a href="{{ route('acudientes.index') }}">Volver a Acudientes</a>
@endsection