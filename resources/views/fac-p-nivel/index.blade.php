@extends('layouts.app')

@section('template_title')
    Fac P Nivels
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Fac P Nivels') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fac-p-nivels.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Nivel</th>
									<th >Nombre</th>
									<th >Id Eps</th>
									<th >Id Regimen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facPNivels as $facPNivel)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $facPNivel->nivel }}</td>
										<td >{{ $facPNivel->nombre }}</td>
										<td >{{ $facPNivel->id_eps }}</td>
										<td >{{ $facPNivel->id_regimen }}</td>

                                            <td>
                                                <form action="{{ route('fac-p-nivels.destroy', $facPNivel->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fac-p-nivels.show', $facPNivel->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fac-p-nivels.edit', $facPNivel->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $facPNivels->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
