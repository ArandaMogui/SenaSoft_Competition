@extends('layouts.app')

@section('template_title')
    Listaopciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listaopciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('listaopciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Variable</th>
									<th >Descripcion</th>
									<th >Valor</th>
									<th >Nombre</th>
									<th >Abreviacion</th>
									<th >Habilita</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listaopciones as $listaopcione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $listaopcione->variable }}</td>
										<td >{{ $listaopcione->descripcion }}</td>
										<td >{{ $listaopcione->valor }}</td>
										<td >{{ $listaopcione->nombre }}</td>
										<td >{{ $listaopcione->abreviacion }}</td>
										<td >{{ $listaopcione->habilita }}</td>

                                            <td>
                                                <form action="{{ route('listaopciones.destroy', $listaopcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('listaopciones.show', $listaopcione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('listaopciones.edit', $listaopcione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $listaopciones->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
