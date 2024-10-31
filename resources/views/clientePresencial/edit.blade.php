@extends('adminlte::page')

@section('title', 'editCP')

@section('content_header')
    <h1>EDITAR DATOS DEL CLIENTE PRESENCIAL</h1>
@stop

@section('content')

<form action="/clientePresencial/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre Completo</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$usuario->nombre}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="nit" class="form-label">NIT</label>
        <input id="nit" name="nit" type="text" class="form-control" value="{{$usuario->nit}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="ci" class="form-label">Carnet</label>
        <input id="ci" name="ci" type="text" class="form-control" value="{{$usuario->ci}}" tabindex="3">
    </div>
    <a href="/clientePresencial" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop
