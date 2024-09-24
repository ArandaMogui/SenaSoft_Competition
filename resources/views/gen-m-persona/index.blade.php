@extends('layouts.app')

@section('template_title')
    Gen M Personas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Gen M Personas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('gen-m-personas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Numeroid</th>
									<th >Apellido1</th>
									<th >Apellido2</th>
									<th >Nombre1</th>
									<th >Nombre2</th>
									<th >Fechanac</th>
									<th >Direccion</th>
									<th >Tel Movil</th>
									<th >Email</th>
									<th >Id Tipoid</th>
									<th >Id Sexobiologico</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genMPersonas as $genMPersona)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $genMPersona->numeroid }}</td>
										<td >{{ $genMPersona->apellido1 }}</td>
										<td >{{ $genMPersona->apellido2 }}</td>
										<td >{{ $genMPersona->nombre1 }}</td>
										<td >{{ $genMPersona->nombre2 }}</td>
										<td >{{ $genMPersona->fechanac }}</td>
										<td >{{ $genMPersona->direccion }}</td>
										<td >{{ $genMPersona->tel_movil }}</td>
										<td >{{ $genMPersona->email }}</td>
										<td >{{ $genMPersona->id_tipoid }}</td>
										<td >{{ $genMPersona->id_sexobiologico }}</td>

                                            <td>
                                                <form action="{{ route('gen-m-personas.destroy', $genMPersona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('gen-m-personas.show', $genMPersona->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('gen-m-personas.edit', $genMPersona->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $genMPersonas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
