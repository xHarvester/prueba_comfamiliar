@extends('layouts.plantilla')

@section('title','No Encontrados')

@section('content')
   <h1>No se han encontrado un registro para la busqueda realizada</h1> 
   <a href="{{ route('welcome') }}">Volver a Inicio</a> -
   <a href="{{ route('cuidadores.index') }}">Volver a Cuidadores</a>
@endsection