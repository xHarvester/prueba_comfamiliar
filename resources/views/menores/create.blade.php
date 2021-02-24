@extends('layouts.plantilla')

@section('title','Crear Manor')

@section('content')
   <h1>Crear Menor</h1> 
   <form action="{{ route('menores.store') }}" method="POST">
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
            Registro Civil:
            <br>
            <input type="text" name="registro_civil" placeholder="Registro Civil">
        </label><br>
        <label>
            Fecha de Nacimiento:
            <br>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
        </label><br>
        <label>
            Ciudad:
            <br>
            <input type="text" name="ciudad" placeholder="Ciudad">
        </label><br>
        <label>
            Dirección:
            <br>
            <input type="text" name="direccion" placeholder="Dirección">
        </label><br>
        <label>
            Alergia:
            <br>
            <select name="alergia_id">
                @foreach ($alergias as $alergia)
                    <option value="{{ $alergia->id }}">{{ $alergia->nombre }}</option>
                @endforeach
            </select>
            <br>
        </label><br>
        <label>
            Acudiente:
            <br>
            <select name="acudiente_id">
                @foreach ($acudientes as $acudiente)
                    <option value="{{ $acudiente->id }}">[{{ $acudiente->identificacion }}] {{ $acudiente->nombres }}  {{ $acudiente->apellidos }}</option>
                @endforeach
            </select>
            <br>
        </label><br>
        <input type="submit" value="Adicionar menor">
   </form>
   <a href="{{ route('menores.index') }}">Volver</a>
@endsection