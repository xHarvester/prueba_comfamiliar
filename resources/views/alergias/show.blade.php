@extends('layouts.plantilla')

@section('title','Alergia')

@section('content')
   <h1>Ver registro de alergia</h1> 
   <h2>{{ $alergia->nombre }} <small><a href="{{ route('alergias.edit', $alergia) }}">Editar</a></small></h2>
   <p><strong>Cuidados: </strong>{{ $alergia->cuidados }}</p>
   <p><strong>Cuidador: </strong>[{{ $alergia->cuidador->identificacion }}] {{ $alergia->cuidador->nombres }} {{ $alergia->cuidador->apellidos }}</p>
   <form action="{{ route('alergias.destroy', $alergia) }}" method="POST">
      @csrf
      @method('delete')
      <input type="submit" value="Eliminar registro">
   </form><br>
   <a href="{{ route('welcome') }}">Volver a Inicio</a> -
   <a href="{{ route('alergias.index') }}">Volver a alergias</a>
@endsection