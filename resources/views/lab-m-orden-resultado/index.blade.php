@extends('layouts.app')

@section('template_title')
    Lab M Orden Resultados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lab M Orden Resultados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lab-m-orden-resultados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Fecha</th>
									<th >Id Orden</th>
									<th >Id Prueba</th>
									<th >Id Procedimiento</th>
									<th >Id Pruebaopcion</th>
									<th >Res Opcion</th>
									<th >Res Numerico</th>
									<th >Res Texto</th>
									<th >Res Memo</th>
									<th >Num Procesamientos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($labMOrdenResultados as $labMOrdenResultado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $labMOrdenResultado->fecha }}</td>
										<td >{{ $labMOrdenResultado->id_orden }}</td>
										<td >{{ $labMOrdenResultado->id_prueba }}</td>
										<td >{{ $labMOrdenResultado->id_procedimiento }}</td>
										<td >{{ $labMOrdenResultado->id_pruebaopcion }}</td>
										<td >{{ $labMOrdenResultado->res_opcion }}</td>
										<td >{{ $labMOrdenResultado->res_numerico }}</td>
										<td >{{ $labMOrdenResultado->res_texto }}</td>
										<td >{{ $labMOrdenResultado->res_memo }}</td>
										<td >{{ $labMOrdenResultado->num_procesamientos }}</td>

                                            <td>
                                                <form action="{{ route('lab-m-orden-resultados.destroy', $labMOrdenResultado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lab-m-orden-resultados.show', $labMOrdenResultado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lab-m-orden-resultados.edit', $labMOrdenResultado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $labMOrdenResultados->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
