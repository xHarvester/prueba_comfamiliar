@extends('layouts.plantilla')

@section('title','Editar Acudiente')

@section('content')
   <h1>Actualizar acudiente</h1> 
   <form action="{{ route('acudientes.update', $acudiente) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombres:
            <br>
            <input type="text" name="nombres" placeholder="Nombres" value="{{ old('nombres', $acudiente->nombres) }}">
        </label><br>
        <label>
            Apellidos:
            <br>
            <input type="text" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos', $acudiente->apellidos) }}">
        </label><br>
        <label>
            Identificación:
            <br>
            <input type="text" name="identificacion" placeholder="Identificacion" value="{{ old('identificacion', $acudiente->identificacion) }}">
        </label><br>
        <label>
            Telefono:
            <br>
            <input type="text" name="telefono" placeholder="Telefono" value="{{ old('telefono', $acudiente->telefono) }}">
        </label><br>
        <label>
            Ciudad:
            <br>
            <input type="text" name="ciudad" placeholder="Ciudad" value="{{ old('ciudad', $acudiente->ciudad) }}">
        </label><br>
        <label>
            Dirección:
            <br>
            <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion', $acudiente->direccion) }}">
        </label><br>
        <label>
            Parentesco:
            <br>
            <input type="text" name="parentesco" placeholder="Parentesco" value="{{ old('parentesco', $acudiente->parentesco) }}">
        </label><br>
        <input type="submit" value="Actualizar Acudiente">
   </form>
@endsection