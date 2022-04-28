@extends('adminlte::page')

@section('title', 'Imprimir [Ctrl+P]')

@section('content_header')
    <br>
@stop

@section('content')
<style>
    .clase_table {
  border-collapse: separate;
  border-spacing: 10;
  border: 1px solid black;
  border-radius: 15px;
  -moz-border-radius: 20px;
  padding: 2px;
}
</style>

<?php

use Illuminate\Support\Facades\DB;
//$C1 = DB::select("SELECT item, precio FROM productos WHERE item=$remisione->item1");

$C1 = DB::table('productos')->where('id', $remisione->item1)->value("precio");
$C2 = DB::table('productos')->where('id', $remisione->item2)->value("precio");
$C3 = DB::table('productos')->where('id', $remisione->item3)->value("precio");
$C4 = DB::table('productos')->where('id', $remisione->item4)->value("precio");
$C5 = DB::table('productos')->where('id', $remisione->item5)->value("precio");
$C6 = DB::table('productos')->where('id', $remisione->item6)->value("precio");
$C7 = DB::table('productos')->where('id', $remisione->item7)->value("precio");
$C8 = DB::table('productos')->where('id', $remisione->item8)->value("precio");
$C9 = DB::table('productos')->where('id', $remisione->item9)->value("precio");
$C10 = DB::table('productos')->where('id', $remisione->item10)->value("precio");
$C11 = DB::table('productos')->where('id', $remisione->item11)->value("precio");
$C12 = DB::table('productos')->where('id', $remisione->item12)->value("precio");
$C13 = DB::table('productos')->where('id', $remisione->item13)->value("precio");
$C14 = DB::table('productos')->where('id', $remisione->item14)->value("precio");
$C15 = DB::table('productos')->where('id', $remisione->item15)->value("precio");

$P1 = $C1 * $remisione->cant1;
$P2 = $C2 * $remisione->cant2;
$P3 = $C3 * $remisione->cant3;
$P4 = $C4 * $remisione->cant4;
$P5 = $C5 * $remisione->cant5;
$P6 = $C6 * $remisione->cant6;
$P7 = $C7 * $remisione->cant7;
$P8 = $C8 * $remisione->cant8;
$P9 = $C9 * $remisione->cant9;
$P10 = $C10 * $remisione->cant10;
$P11 = $C11 * $remisione->cant11;
$P12 = $C12 * $remisione->cant12;
$P13 = $C13 * $remisione->cant13;
$P14 = $C14 * $remisione->cant14;
$P15 = $C15 * $remisione->cant15;

$Total=$P1+$P2+$P3+$P4+$P5+$P6+$P7+$P8+$P9+$P10+$P11+$P12+$P13+$P14+$P15;




?>

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
                            ${{ number_format($Total, 2) }}
                        </div>
                        <table class="clase_table">
                    <tr>
                        <td><b>R.U.C.:</b>prueba</td>
                    </tr>
                    <tr >
                        <td><b>FACTURA:</b>prueba </td>
                    </tr>
                    <tr>
                        <td><b>NÚMERO DE AUTORIZACIÓN:</b><br>prueba</td>
                    </tr>
                    <tr>
                        <td><b>FECHA Y HORA DE AUTORIZACIÓN:</b></td>
                    </tr>
                    <tr>
                        <td ><b>AMBIENTE:</b> PRUEBAS</td>
                    </tr>
                    <tr>
                        <td><b>EMISIÓN:</b> NORMAL</td>
                    </tr>
                    <tr>
                        <td ><b>CLAVE DE ACCESO:</b><br>prueba</td>
                    </tr>
                   
                </table>
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

