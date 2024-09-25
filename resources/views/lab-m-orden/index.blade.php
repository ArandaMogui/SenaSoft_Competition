@extends('layouts.app')

@section('template_title')
    Lab M Ordens
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lab M Ordens') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lab-m-ordens.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($labMOrdens as $labMOrden)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $labMOrden->id_documento }}</td>
										<td >{{ $labMOrden->id_profesional_ordena }}</td>
										<td >{{ $labMOrden->orden }}</td>
										<td >{{ $labMOrden->fecha }}</td>
										<td >{{ $labMOrden->id_historia }}</td>
										<td >{{ $labMOrden->profesional_externo }}</td>

                                            <td>
                                                <form action="{{ route('lab-m-ordens.destroy', $labMOrden->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lab-m-ordens.show', $labMOrden->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lab-m-ordens.edit', $labMOrden->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $labMOrdens->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
