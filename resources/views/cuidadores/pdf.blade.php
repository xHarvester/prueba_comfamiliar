@extends('layouts.plantilla')

@section('title','Pdf')

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
    <br><br>
    <table>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Identificación</th>
            <th>Teléfono</th>
        </tr>
        @foreach ($cuidadores as $cuidador)
            <tr>
                <td>{{ $cuidador->nombres }}</td>
                <td>{{ $cuidador->apellidos }}</td>
                <td>{{ $cuidador->identificacion }}</td>
                <td>{{ $cuidador->telefono }}</td>
            </tr>
        @endforeach
    </table>
@endsection
