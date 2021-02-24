@extends('layouts.plantilla')

@section('title','Editar Alergia')

@section('content')
   <h1>Actualizar alergia</h1> 
   <form action="{{ route('alergias.update', $alergia) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombres:
            <br>
            <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre', $alergia->nombre) }}">
        </label><br>
        <label>
            Cuidados:
            <br>
            <textarea name="cuidados"cols="30" rows="10">{{ old('cuidados', $alergia->cuidados) }}</textarea>
        </label><br>
        <label>
            Cuidador:
            <br>
            <select name="cuidador_id">
                @foreach ($cuidadores as $cuidador)
                    @if ($cuidador->id == $alergia->cuidador_id)
                        <option value="{{ $cuidador->id }}" selected="selected">[{{ $cuidador->identificacion }}]{{ $cuidador->nombres }} {{ $cuidador->apellidos }} </option>
                    @else
                        <option value="{{ $cuidador->id }}">[{{ $cuidador->identificacion }}]{{ $cuidador->nombres }} {{ $cuidador->apellidos }} </option>
                    @endif
                @endforeach
            </select>
        </label><br>
        <input type="submit" value="Actualizar alergia">
   </form>
@endsection