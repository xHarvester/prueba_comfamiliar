@extends('layouts.plantilla')

@section('title','Menor')

@section('content')
   <h1>Ver registro de menor</h1> 
   <h2>[{{ $menor->registro_civil }}] {{ $menor->nombres }} {{ $menor->apellidos }} <small><a href="{{ route('menores.edit', $menor) }}">Editar</a></small></h2>
   <p><strong>Fecha de Nacimiento: </strong>{{ $menor->fecha_nacimiento }}</p>
   <p><strong>Ciudad: </strong>{{ $menor->ciudad }}</p>
   <p><strong>dirección: </strong>{{ $menor->direccion }}</p>
   <p><strong>Alergia: </strong>{{ $menor->alergia->nombre }}</p>
   <p><strong>Acudiente: </strong>[{{ $menor->acudiente->identificacion }}] {{ $menor->acudiente->nombres }} {{ $menor->acudiente->apellidos }}</p>
   <form action="{{ route('menores.destroy', $menor) }}" method="POST">
      @csrf
      @method('delete')
      <input type="submit" value="Eliminar registro">
   </form><br>
   <a href="{{ route('welcome') }}">Volver a Inicio</a> -
   <a href="{{ route('menores.index') }}">Volver a menores</a>
@endsection