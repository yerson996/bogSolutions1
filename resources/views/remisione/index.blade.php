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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No Remisión</th>
										<th>Documento del Cliente</th>

										<th>Notas</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($remisiones as $remisione)
                                        <tr>
                                            <td>RM-{{ $remisione->id }}</td>
                                            
											<td>{{ $remisione->doc }}</td>
											<td>{{ $remisione->notas }}</td>
											<td><script type="text/javascript">
											document.write(f.format({{ $remisione->precio }}));
											</script></td>

                                            <td>
                                                <form action="{{ route('remisiones.destroy',$remisione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('remisiones.show',$remisione->id) }}"><i class="fa fa-fw fa-eye"></i> Ver e Imprimir</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('remisiones.edit',$remisione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar?')"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
	const f = new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    miniumFractionDigits: 0
    }); 
	</script>
@stop