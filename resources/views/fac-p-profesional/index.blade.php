@extends('layouts.app')

@section('template_title')
    Fac P Profesionals
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Fac P Profesionals') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fac-p-profesionals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Codigo</th>
									<th >Id Persona</th>
									<th >Registro Medico</th>
									<th >Id Tipo Prof</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facPProfesionals as $facPProfesional)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $facPProfesional->codigo }}</td>
										<td >{{ $facPProfesional->id_persona }}</td>
										<td >{{ $facPProfesional->registro_medico }}</td>
										<td >{{ $facPProfesional->id_tipo_prof }}</td>

                                            <td>
                                                <form action="{{ route('fac-p-profesionals.destroy', $facPProfesional->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fac-p-profesionals.show', $facPProfesional->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fac-p-profesionals.edit', $facPProfesional->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $facPProfesionals->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
