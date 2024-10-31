@extends('adminlte::page')

@section('title', 'Clientes Presenciales')

@section('content_header')
    <h1>LISTA DE CLIENTES PRESENCIALES</h1>
@stop

@section('content')
<a href="{{ route('clientePresencial.create') }}" class="btn btn-primary">NUEVO CLIENTE PRESENCIAL</a>

<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
          <!--  <th scope="col">Nombre</th>-->
            <th scope="col">Carnet</th>
         <!--   <th scope="col">Acciones</th>-->
        </tr>
    </thead>
    <tbody>
   

        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->Id }}</td>
            
            <td>{{ $cliente->Ci }}</td>
            
        </tr>
        @endforeach

    </tbody>
</table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

<script>
    $(document).ready(function() {
        $('#usuarios').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
</script>
@stop


 
