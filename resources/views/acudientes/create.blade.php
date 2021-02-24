@extends('layouts.plantilla')

@section('title','Crear Acudiente')

@section('content')
   <h1>Crear acudiente</h1> 
   <form action="{{ route('acudientes.store') }}" method="POST">
        @csrf
        <label>
            Nombres:
            <br>
            <input type="text" name="nombres" placeholder="Nombres">
        </label><br>
        <label>
            Apellidos:
            <br>
            <input type="text" name="apellidos" placeholder="Apellidos">
        </label><br>
        <label>
            Identificación:
            <br>
            <input type="text" name="identificacion" placeholder="Identificacion">
        </label><br>
        <label>
            Telefono:
            <br>
            <input type="text" name="telefono" placeholder="Telefono">
        </label><br>
        <label>
            Ciudad:
            <br>
            <input type="text" name="ciudad" placeholder="Ciudad">
        </label><br>
        <label>
            Dirección:
            <br>
            <input type="text" name="direccion" placeholder="Direccion">
        </label><br>
        <label>
            Parentesco:
            <br>
            <input type="text" name="parentesco" placeholder="Parentesco">
        </label><br>
        <input type="submit" value="Adicionar Acudiente">
   </form>
   <a href="{{ route('acudientes.index') }}">Volver</a>
@endsection