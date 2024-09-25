@extends('layouts.app')

@section('template_title')
    Lab P Pruebas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lab P Pruebas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lab-p-pruebas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Procedimiento</th>
									<th >Id Tipo Resultado</th>
									<th >Codigo Prueba</th>
									<th >Nombre Prueba</th>
									<th >Unidad</th>
									<th >Habilita</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($labPPruebas as $labPPrueba)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $labPPrueba->id_procedimiento }}</td>
										<td >{{ $labPPrueba->id_tipo_resultado }}</td>
										<td >{{ $labPPrueba->codigo_prueba }}</td>
										<td >{{ $labPPrueba->nombre_prueba }}</td>
										<td >{{ $labPPrueba->unidad }}</td>
										<td >{{ $labPPrueba->habilita }}</td>

                                            <td>
                                                <form action="{{ route('lab-p-pruebas.destroy', $labPPrueba->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lab-p-pruebas.show', $labPPrueba->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lab-p-pruebas.edit', $labPPrueba->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $labPPruebas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
