@extends('layouts.plantilla')

@section('title','Alergias')

@section('content')
    <style>
        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
   <h1>Lista de Alergias</h1> 

    <a href="{{ route('alergias.create') }}">Crear Alergia</a>
    <a href="{{ route('welcome') }}">Volver</a>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Cuidados</th>
            <th>Cuidador</th>
            <th>Acción</th>
        </tr>
        @foreach ($alergias as $alergia)
            <tr>
                <td>{{ $alergia->nombre }}</td>
                <td>{{ $alergia->cuidados }}</td>
                <td>[{{ $alergia->cuidador->identificacion }}] {{ $alergia->cuidador->nombres }} {{ $alergia->cuidador->apellidos }}</td>
                <td>
                    <a href="{{ route('alergias.show', $alergia) }}">Ver</a> - <a href="{{ route('alergias.edit', $alergia) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $alergias->links() }}

@endsection
