@extends('layouts.plantilla')

@section('title','Crear Alergia')

@section('content')
   <h1>Crear alergia</h1> 
   <form action="{{ route('alergias.store') }}" method="POST">
        @csrf
        <label>
            Nombres:
            <br>
            <input type="text" name="nombre" placeholder="Nombre">
        </label><br>
        <label>
            Cuidados:
            <br>
            <textarea name="cuidados" cols="30" rows="10"></textarea>
        </label><br>
        <label>
            Cuidador:
            <select name="cuidador_id">
                @foreach ($cuidadores as $cuidador)
                    <option value="{{ $cuidador->id }}">[{{ $cuidador->identificacion }}]{{ $cuidador->nombres }} {{ $cuidador->apellidos }} </option>
                @endforeach
            </select>
            <br>
        </label><br>
        <input type="submit" value="Adicionar alergia">
   </form>
   <a href="{{ route('alergias.index') }}">Volver</a>
@endsection