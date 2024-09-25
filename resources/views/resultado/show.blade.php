@extends('layouts.app')

@section('template_title')
    {{ $resultado->name ?? __('Show') . " " . __('Resultado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Resultado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('resultados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $resultado->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Orden:</strong>
                                    {{ $resultado->id_orden }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Prueba:</strong>
                                    {{ $resultado->id_prueba }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Procedimiento:</strong>
                                    {{ $resultado->id_procedimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Pruebaopcion:</strong>
                                    {{ $resultado->id_pruebaopcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Opcion:</strong>
                                    {{ $resultado->res_opcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Numerico:</strong>
                                    {{ $resultado->res_numerico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Texto:</strong>
                                    {{ $resultado->res_texto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Memo:</strong>
                                    {{ $resultado->res_memo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Procesamientos:</strong>
                                    {{ $resultado->num_procesamientos }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
