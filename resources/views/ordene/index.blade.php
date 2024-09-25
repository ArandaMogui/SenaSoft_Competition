@extends('layouts.app')

@section('template_title')
Ordenes
@endsection

@section('content')

<div class="container-fluid my-4">
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title" class="w-100 text-center">
                    @if ($ordenes->isNotEmpty())
                    @if ($ordenes->first()->paciente)
                    <h5 class="card-title mb-0">{{ $ordenes->first()->paciente->nombre1 }} {{ $ordenes->first()->paciente->apellido1 }}</h5>
                    @else
                    <h5 class="card-title mb-0">No hay paciente asignado.</h5>
                    @endif
                    @else
                    <h5 class="card-title mb-0">No hay órdenes disponibles.</h5>
                    @endif
                </span>
            </div>
        </div>
    </div>
</div>

<h3 style="font-weight: bold" class="font-weight-bold display-6">Órdenes de laboratorio</h3>

<div class="container-fluid mr-1">
    <form action="{{ route('ordenes.index') }}" method="GET" class="row justify-content-end mb-3">
        <div class="col-auto mb-2">
            <label for="search_order" class="form-label">Número de orden</label>
            <input type="text" class="form-control" name="search_order" placeholder="Buscar por número de orden..." value="{{ request()->get('search_order') }}">
        </div>
        <div class="col-auto mb-2">
            <label for="start_date" class="form-label">Fecha de inicio</label>
            <input type="date" class="form-control" name="start_date" id="start_date" value="{{ request()->get('start_date') }}" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
        </div>
        <div class="col-auto mb-2">
            <label for="end_date" class="form-label">Fecha final</label>
            <input type="date" class="form-control" name="end_date" id="end_date" value="{{ request()->get('end_date') }}" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
        </div>
        <div class="col-auto mb-2 align-self-end">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="bi bi-search"></i><span class="tooltiptext">Buscar</span>
            </button>
        </div>
    </form>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Ordenes') }}
                        </span>
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
                                        <th>Tipo de orden</th>
                                        <th>Numero de Orden</th>
                                        <th>Fecha</th>
                                        <th>Profesional Externo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordenes as $ordene)
                                    <tr>
                                        <td>{{ $ordene->documento ? $ordene->documento->nombre : 'N/A' }}</td>
                                        <td>{{ $ordene->orden }}</td>
                                        <td>{{ $ordene->fecha }}</td>
                                        <td>{{ $ordene->profesional_externo ? 'Sí' : 'No' }}</td>


                                        <td>
                                            <form action="{{ route('ordenes.destroy', $ordene->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('ordenes.show', $ordene->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            {!! $ordenes->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection