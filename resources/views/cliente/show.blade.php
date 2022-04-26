@extends('adminlte::page')

@section('title', 'Cliente Detallado')

@section('content_header')
    
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Cliente Detallado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona:</strong>
                            {{ $cliente->persona }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodoc:</strong>
                            {{ $cliente->tipoDoc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $cliente->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $cliente->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $cliente->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $cliente->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrelegal:</strong>
                            {{ $cliente->nombreLegal }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $cliente->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Cel:</strong>
                            {{ $cliente->cel }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $cliente->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop