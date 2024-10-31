@extends('adminlte::page')

@section('title', 'Crear Trabajador')

@section('content_header')
    <h1>CREAR NUEVO TRABAJADOR</h1>
@stop

@section('content')

<form action="/cajero" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre Completo</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="horaEntrada" class="form-label">Hora de Entrada</label>
        <input id="horaEntrada" name="horaEntrada" type="time" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="horaSalida" class="form-label">Hora de Salida</label>
        <input id="horaSalida" name="horaSalida" type="time" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="salario" class="form-label">Salario</label>
        <input id="salario" name="salario" type="number" step="any" value="0.00" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="puesto" class="form-label">Puesto</label>
        <select id="puesto" name="puesto" class="form-control" tabindex="7">
            <option value="cajero">Cajero</option>
            <option value="gerente">Gerente</option>
            <option value="supervisor">Supervisor</option>
            <!-- Añade más opciones según sea necesario -->
        </select>
    </div>
    <a href="/cajero" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop
