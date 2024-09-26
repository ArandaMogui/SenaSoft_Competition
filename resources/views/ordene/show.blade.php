@extends('layouts.app')

@section('template_title')
    {{ $ordene->name ?? __('Show') . " " . __('Ordene') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalles de la orden') }} </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('ordenes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo de orden:</strong>
                                    {{ $ordene->documento ? $ordene->documento->nombre : 'N/A' }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Profesional Ordena:</strong>
                                    <td>{{ $ordene->profesional ? $ordene->profesional->codigo : 'N/A' }}</td>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Orden:</strong>
                                    {{ $ordene->orden }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $ordene->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Historia:</strong>
                                    {{ $ordene->id_historia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Profesional Externo:</strong>
                                    {{ $ordene->profesional_externo ? 'Sí' : 'No' }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
