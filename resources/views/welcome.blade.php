@extends('layouts.plantilla')

@section('title','Inicio')

@section('content')
   <h1>Información</h1> 
   <ul>
       <li><a href="{{ route('cuidadores.index') }}">Ir a Cuidadores</a></li>
       <li><a href="{{ route('menores.index') }}">Ir a Menores</a></li>
       <li><a href="{{ route('acudientes.index') }}">Ir a Acudientes</a></li>
       <li><a href="{{ route('alergias.index') }}">Ir a Alergias</a></li>
   </ul>
@endsection