@extends('adminlte::page')

@section('title', 'Imprimir [Ctrl+P]')

@section('content_header')
    <br>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Remision</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('remisiones.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Doc:</strong>
                            {{ $remisione->doc }}
                        </div>
                        <div class="form-group">
                            <strong>Item1:</strong>
                            {{ $remisione->item1 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant1:</strong>
                            {{ $remisione->cant1 }}
                        </div>
                        <div class="form-group">
                            <strong>Item2:</strong>
                            {{ $remisione->item2 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant2:</strong>
                            {{ $remisione->cant2 }}
                        </div>
                        <div class="form-group">
                            <strong>Item3:</strong>
                            {{ $remisione->item3 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant3:</strong>
                            {{ $remisione->cant3 }}
                        </div>
                        <div class="form-group">
                            <strong>Item4:</strong>
                            {{ $remisione->item4 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant4:</strong>
                            {{ $remisione->cant4 }}
                        </div>
                        <div class="form-group">
                            <strong>Item5:</strong>
                            {{ $remisione->item5 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant5:</strong>
                            {{ $remisione->cant5 }}
                        </div>
                        <div class="form-group">
                            <strong>Item6:</strong>
                            {{ $remisione->item6 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant6:</strong>
                            {{ $remisione->cant6 }}
                        </div>
                        <div class="form-group">
                            <strong>Item7:</strong>
                            {{ $remisione->item7 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant7:</strong>
                            {{ $remisione->cant7 }}
                        </div>
                        <div class="form-group">
                            <strong>Item8:</strong>
                            {{ $remisione->item8 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant8:</strong>
                            {{ $remisione->cant8 }}
                        </div>
                        <div class="form-group">
                            <strong>Item9:</strong>
                            {{ $remisione->item9 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant9:</strong>
                            {{ $remisione->cant9 }}
                        </div>
                        <div class="form-group">
                            <strong>Item10:</strong>
                            {{ $remisione->item10 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant10:</strong>
                            {{ $remisione->cant10 }}
                        </div>
                        <div class="form-group">
                            <strong>Item11:</strong>
                            {{ $remisione->item11 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant11:</strong>
                            {{ $remisione->cant11 }}
                        </div>
                        <div class="form-group">
                            <strong>Item12:</strong>
                            {{ $remisione->item12 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant12:</strong>
                            {{ $remisione->cant12 }}
                        </div>
                        <div class="form-group">
                            <strong>Item13:</strong>
                            {{ $remisione->item13 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant13:</strong>
                            {{ $remisione->cant13 }}
                        </div>
                        <div class="form-group">
                            <strong>Item14:</strong>
                            {{ $remisione->item14 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant14:</strong>
                            {{ $remisione->cant14 }}
                        </div>
                        <div class="form-group">
                            <strong>Item15:</strong>
                            {{ $remisione->item15 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant15:</strong>
                            {{ $remisione->cant15 }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $remisione->notas }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $remisione->precio }}
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