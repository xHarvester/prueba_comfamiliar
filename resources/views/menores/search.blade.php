@extends('layouts.plantilla')

@section('title','Resultado de la busqueda')

@section('content')
   <h1>Resultados</h1> 
   <form action="{{ route('cuidadores.store') }}" method="POST">
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
        <input type="submit" value="Adicionar Cuidador">
   </form>
   <a href="{{ route('cuidadores.index') }}">Volver</a>
@endsection