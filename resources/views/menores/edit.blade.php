@extends('layouts.plantilla')

@section('title','Editar Menor')

@section('content')
   <h1>Actualizar Manor</h1> 
   <form action="{{ route('menores.update', $menor) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombres:
            <br>
            <input type="text" name="nombres" placeholder="Nombre" value="{{ old('nombres', $menor->nombres) }}">
        </label><br>
        <label>
            Apellidos:
            <br>
            <input type="text" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos', $menor->apellidos) }}">
        </label><br>
        <label>
            Registro Civil:
            <br>
            <input type="text" name="registro_civil" placeholder="Registro Civil" value="{{ old('registro_civil', $menor->registro_civil) }}">
        </label><br>
        <label>
            Ciudad:
            <br>
            <input type="text" name="ciudad" placeholder="Ciudad" value="{{ old('ciudad', $menor->ciudad) }}">
        </label><br>
        <label>
            Dirección:
            <br>
            <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion', $menor->direccion) }}">
        </label><br>
        <label>
            Alergia:
            <br>
            <select name="alergia_id">
                @foreach ($alergias as $alergia)
                    @if ($alergia->id == $menor->alergia_id)
                        <option value="{{ $alergia->id }}" selected="selected">{{ $alergia->nombre }}</option>
                    @else
                        <option value="{{ $alergia->id }}">{{ $alergia->nombre }}</option>
                    @endif
                @endforeach
            </select>
        </label><br>
        <label>
            Acudiente:
            <br>
            <select name="acudiente_id">
                @foreach ($acudientes as $acudiente)
                    @if ($acudiente->id == $menor->acudiente_id)
                        <option value="{{ $acudiente->id }}" selected="selected">{{ $acudiente->nombres }} {{ $acudiente->apellidos }}</option>
                    @else
                        <option value="{{ $acudiente->id }}">{{ $acudiente->nombres }} {{ $acudiente->apellidos }}</option>
                    @endif
                @endforeach
            </select>
        </label><br>
        <input type="submit" value="Actualizar menor">
   </form>
@endsection