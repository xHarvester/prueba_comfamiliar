@extends('layouts.plantilla')

@section('title','Menores')

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
   <h1>Lista de Menores</h1> 

    <a href="{{ route('menores.create') }}">Crear Menor</a>
    <a href="{{ route('welcome') }}">Volver</a>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Registro Civil</th>
            <th>Fecha de Nacimiento</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Alergia</th>
            <th>Acudiente</th>
            <th>Acción</th>
        </tr>
        @foreach ($menores as $menor)
            <tr>
                <td>{{ $menor->nombres }}</td>
                <td>{{ $menor->apellidos }}</td>
                <td>{{ $menor->registro_civil }}</td>
                <td>{{ $menor->fecha_nacimiento }}</td>
                <td>{{ $menor->ciudad }}</td>
                <td>{{ $menor->direccion }}</td>
                <td>{{ $menor->alergia->nombre }}</td>
                <td>[{{ $menor->acudiente->identificacion }}] {{ $menor->acudiente->nombres }} {{ $menor->acudiente->apellidos }}</td>
                <td>
                    <a href="{{ route('menores.show', $menor) }}">Ver</a> - <a href="{{ route('menores.edit', $menor) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $menores->links() }}

@endsection
