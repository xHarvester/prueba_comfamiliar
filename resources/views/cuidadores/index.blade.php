@extends('layouts.plantilla')

@section('title','Cuidadores')

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
   <h1>Lista de Cuidadores</h1> 

    <a href="{{ route('cuidadores.create') }}">Crear Cuidador</a>
    <a href="{{ route('welcome') }}">Volver</a>
    <br><br>
    <table>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Identificación</th>
            <th>Teléfono</th>
            <th>Acción</th>
        </tr>
        @foreach ($cuidadores as $cuidador)
            <tr>
                <td>{{ $cuidador->nombres }}</td>
                <td>{{ $cuidador->apellidos }}</td>
                <td>{{ $cuidador->identificacion }}</td>
                <td>{{ $cuidador->telefono }}</td>
                <td>
                    <a href="{{ route('cuidadores.show', $cuidador) }}">Ver</a> - <a href="{{ route('cuidadores.edit', $cuidador) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <form action="{{ route('cuidadores.search') }}" method="POST">
        @csrf
        <input type="text" name="buscar" placeholder="Buscar">
        <input type="submit" value="Buscar Cuidador">
    </form>
    <a href="{{ route('cuidadores.pdf') }}">Exportar Datos a PDF</a>
    {{ $cuidadores->links() }}

@endsection
