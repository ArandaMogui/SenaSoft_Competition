@extends('layouts.app')

@section('template_title')
    Procedimientos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Procedimientos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('procedimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Cups</th>
									<th >Id Grupo Laboratorio</th>
									<th >Metodo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($procedimientos as $procedimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $procedimiento->id_cups }}</td>
										<td >{{ $procedimiento->id_grupo_laboratorio }}</td>
										<td >{{ $procedimiento->metodo }}</td>

                                            <td>
                                                <form action="{{ route('procedimientos.destroy', $procedimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('procedimientos.show', $procedimiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('procedimientos.edit', $procedimiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $procedimientos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
