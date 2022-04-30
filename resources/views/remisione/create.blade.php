@extends('adminlte::page')

@section('title', 'Crear Remision')

@section('content_header')
    <br>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Remision</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('remisiones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('remisione.form')

                        </form>
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
<script>
document.getElementById('item1').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var Precio = document.getElementById('precio1');

  /* Asignamos cada dato a su input*/
  Precio.value = mData.precio;



};
</script>
@stop
