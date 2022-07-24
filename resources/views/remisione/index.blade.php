@extends('adminlte::page')

@section('title', 'Remisiones')

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
                                {{ __('Remisiones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('remisiones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Remisión') }}
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






                        <table id="example" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th width="1px"></th>
                                        <th>No Remisión</th>
										<th>Documento del Cliente</th>

										<th>Fecha</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($remisiones as $remisione)
                                        <tr>
                                            <td>RM-</td>
                                            <td>{{ $remisione->id }}</td>
											<td>{{ $remisione->doc }}</td>
											<td>{{ $remisione->created_at->format('d-m-Y') }}</td>

                                            <td>{{ $remisione->estado }}</td>



                                            <td>
                                                <form action="{{ route('remisiones.destroy',$remisione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "  target="_blank" href="{{ route('remisiones.show',$remisione->id) }}"><i class="fa fa-fw fa-eye"></i>Imprimir</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('¿Quieres Anular?')"><i class="fa fa-fw fa-ban"></i>Anular</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="thead">
                                    <tr>
                                        <th width="1px"></th>
                                        <th>No Remisión</th>
										<th>Documento del Cliente</th>

										<th>Fecha</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                            </tfoot>

                            </table>

                        </div>
                    </div>
                </div>
                {!! $remisiones->links() !!}
            </div>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    $(document).ready(function() {
    $('#example').DataTable({

        "order": [[1,'DESC']],
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


    } );
} );
	</script>
@stop
