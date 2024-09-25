@extends('layouts.app')

@section('template_title')
    {{ $prueba->name ?? __('Show') . " " . __('Prueba') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Prueba</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pruebas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Procedimiento:</strong>
                                    {{ $prueba->id_procedimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipo Resultado:</strong>
                                    {{ $prueba->id_tipo_resultado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Prueba:</strong>
                                    {{ $prueba->codigo_prueba }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Prueba:</strong>
                                    {{ $prueba->nombre_prueba }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Unidad:</strong>
                                    {{ $prueba->unidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Habilita:</strong>
                                    {{ $prueba->habilita }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
