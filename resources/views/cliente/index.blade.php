@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<br>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="cliente" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                                
										<th>Persona</th>
										<th>Tipo Doc.</th>
                                        <th>Doc.</th>
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Ciudad</th>
										<th>Celular</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            
											<td>{{ $cliente->persona }}</td>
											<td>{{ $cliente->tipoDoc }}</td>
                                            <td>{{ $cliente->id }}</td>
											<td>{{ $cliente->nombre1 }} {{ $cliente->nombre2 }} {{ $cliente->apellido1 }} {{ $cliente->apellido2 }} {{ $cliente->nombreLegal }} </td>
											<td>{{ $cliente->direccion }}</td>
											<td>{{ $cliente->ciudad }}</td>
											<td>{{ $cliente->cel }}</td>
										

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    <a href="{{ url('/clientes/'.$cliente->id.'/remisiones') }}" class="btn btn-sm btn-warning"><i class="fa fa-fw fa-file-invoice-dollar"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar?')"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfood class="thead">
                                    <tr>
                                                
										<th>Persona</th>
										<th>Tipo Doc.</th>
                                        <th>Doc.</th>
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Ciudad</th>
										<th>Celular</th>


                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- {!! $clientes->links() !!} -->
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/sapoprro.css') }}" rel="stylesheet">
@stop

@section('js')
<script>

$(document).ready(function() {
$('#cliente').DataTable({
    "language": {
        "search":   "Buscar",
        "lengthMenu": "Mostrar _MENU_ registros por pagina",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "paginate":{
                "previous": "Anterior",
                "next": "Siguiente",
                "first": "Primero",
                "last": "Ultimo"
        }
        
    }    

});
} );
</script>
@stop