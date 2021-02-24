@extends('layouts.plantilla')

@section('title','Editar Cuidador')

@section('content')
   <h1>Actualizar cuidador</h1> 
   <form action="{{ route('cuidadores.update', $cuidador) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombres:
            <br>
            <input type="text" name="nombres" placeholder="Nombres" value="{{ old('nombres', $cuidador->nombres) }}">
        </label><br>
        <label>
            Apellidos:
            <br>
            <input type="text" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos', $cuidador->apellidos) }}">
        </label><br>
        <label>
            Identificación:
            <br>
            <input type="text" name="identificacion" placeholder="Identificacion" value="{{ old('identificacion', $cuidador->identificacion) }}">
        </label><br>
        <label>
            Telefono:
            <br>
            <input type="text" name="telefono" placeholder="Telefono" value="{{ old('telefono', $cuidador->telefono) }}">
        </label><br>
        <input type="submit" value="Actualizar Cuidador">
   </form>
@endsection