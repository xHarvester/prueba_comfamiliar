@extends('layouts.plantilla')

@section('title','Acudientes')

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
   <h1>Lista de Acudientes</h1> 

    <a href="{{ route('acudientes.create') }}">Crear Acudiente</a>
    <a href="{{ route('welcome') }}">Volver</a>
    <br>
    <table>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Identificación</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Parentesco</th>
            <th>Acción</th>
        </tr>
        @foreach ($acudientes as $acudiente)
            <tr>
                <td>{{ $acudiente->nombres }}</td>
                <td>{{ $acudiente->apellidos }}</td>
                <td>{{ $acudiente->identificacion }}</td>
                <td>{{ $acudiente->telefono }}</td>
                <td>{{ $acudiente->ciudad }}</td>
                <td>{{ $acudiente->direccion }}</td>
                <td>{{ $acudiente->parentesco }}</td>
                <td>
                    <a href="{{ route('acudientes.show', $acudiente) }}">Ver</a> - <a href="{{ route('acudientes.edit', $acudiente) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $acudientes->links() }}

@endsection
