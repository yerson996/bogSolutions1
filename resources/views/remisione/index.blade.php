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
                                        <th>No</th>
                                        
										<th>Doc</th>
										<th>Item1</th>
										<th>Cant1</th>
										<th>Item2</th>
										<th>Cant2</th>
										<th>Item3</th>
										<th>Cant3</th>
										<th>Item4</th>
										<th>Cant4</th>
										<th>Item5</th>
										<th>Cant5</th>
										<th>Item6</th>
										<th>Cant6</th>
										<th>Item7</th>
										<th>Cant7</th>
										<th>Item8</th>
										<th>Cant8</th>
										<th>Item9</th>
										<th>Cant9</th>
										<th>Item10</th>
										<th>Cant10</th>
										<th>Item11</th>
										<th>Cant11</th>
										<th>Item12</th>
										<th>Cant12</th>
										<th>Item13</th>
										<th>Cant13</th>
										<th>Item14</th>
										<th>Cant14</th>
										<th>Item15</th>
										<th>Cant15</th>
										<th>Notas</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($remisiones as $remisione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $remisione->doc }}</td>
											<td>{{ $remisione->item1 }}</td>
											<td>{{ $remisione->cant1 }}</td>
											<td>{{ $remisione->item2 }}</td>
											<td>{{ $remisione->cant2 }}</td>
											<td>{{ $remisione->item3 }}</td>
											<td>{{ $remisione->cant3 }}</td>
											<td>{{ $remisione->item4 }}</td>
											<td>{{ $remisione->cant4 }}</td>
											<td>{{ $remisione->item5 }}</td>
											<td>{{ $remisione->cant5 }}</td>
											<td>{{ $remisione->item6 }}</td>
											<td>{{ $remisione->cant6 }}</td>
											<td>{{ $remisione->item7 }}</td>
											<td>{{ $remisione->cant7 }}</td>
											<td>{{ $remisione->item8 }}</td>
											<td>{{ $remisione->cant8 }}</td>
											<td>{{ $remisione->item9 }}</td>
											<td>{{ $remisione->cant9 }}</td>
											<td>{{ $remisione->item10 }}</td>
											<td>{{ $remisione->cant10 }}</td>
											<td>{{ $remisione->item11 }}</td>
											<td>{{ $remisione->cant11 }}</td>
											<td>{{ $remisione->item12 }}</td>
											<td>{{ $remisione->cant12 }}</td>
											<td>{{ $remisione->item13 }}</td>
											<td>{{ $remisione->cant13 }}</td>
											<td>{{ $remisione->item14 }}</td>
											<td>{{ $remisione->cant14 }}</td>
											<td>{{ $remisione->item15 }}</td>
											<td>{{ $remisione->cant15 }}</td>
											<td>{{ $remisione->notas }}</td>
											<td>{{ $remisione->precio }}</td>

                                            <td>
                                                <form action="{{ route('remisiones.destroy',$remisione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('remisiones.show',$remisione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('remisiones.edit',$remisione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
    <script> console.log('Hi!'); </script>
@stop