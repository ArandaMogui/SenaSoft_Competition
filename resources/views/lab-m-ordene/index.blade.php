@extends('layouts.app')

@section('template_title')
    Lab M Ordenes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lab M Ordenes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lab-m-ordenes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Documento</th>
									<th >Id Profesional Ordena</th>
									<th >Orden</th>
									<th >Fecha</th>
									<th >Id Historia</th>
									<th >Profesional Externo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($labMOrdenes as $labMOrdene)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $labMOrdene->id_documento }}</td>
										<td >{{ $labMOrdene->id_profesional_ordena }}</td>
										<td >{{ $labMOrdene->orden }}</td>
										<td >{{ $labMOrdene->fecha }}</td>
										<td >{{ $labMOrdene->id_historia }}</td>
										<td >{{ $labMOrdene->profesional_externo }}</td>

                                            <td>
                                                <form action="{{ route('lab-m-ordenes.destroy', $labMOrdene->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lab-m-ordenes.show', $labMOrdene->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lab-m-ordenes.edit', $labMOrdene->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $labMOrdenes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
