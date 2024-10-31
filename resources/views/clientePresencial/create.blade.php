@extends('adminlte::page')

@section('title', 'crearCP')

@section('content_header')
    <h1>CREAR NUEVO CLIENTE PRESENCIAL</h1>
@stop

@section('content')

<form action= "{{ route('clientePresencial.store') }}" method="POST">
    <!--"/clientePresencial"-->
    @csrf
    <!--<div class="mb-3">
        <label for="nombre" class="form-label">Nombre Completo</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>-->
    <div class="mb-3">
        <label for="nit" class="form-label">Id</label>
        <input id="nit" name="Id" type="number" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="ci" class="form-label">Carnet</label>
        <input id="ci" name="Ci" type="number" class="form-control" tabindex="3">
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
