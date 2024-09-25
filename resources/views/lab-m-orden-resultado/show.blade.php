@extends('layouts.app')

@section('template_title')
    {{ $labMOrdenResultado->name ?? __('Show') . " " . __('Lab M Orden Resultado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lab M Orden Resultado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lab-m-orden-resultados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $labMOrdenResultado->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Orden:</strong>
                                    {{ $labMOrdenResultado->id_orden }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Prueba:</strong>
                                    {{ $labMOrdenResultado->id_prueba }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Procedimiento:</strong>
                                    {{ $labMOrdenResultado->id_procedimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Pruebaopcion:</strong>
                                    {{ $labMOrdenResultado->id_pruebaopcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Opcion:</strong>
                                    {{ $labMOrdenResultado->res_opcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Numerico:</strong>
                                    {{ $labMOrdenResultado->res_numerico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Texto:</strong>
                                    {{ $labMOrdenResultado->res_texto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Res Memo:</strong>
                                    {{ $labMOrdenResultado->res_memo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Procesamientos:</strong>
                                    {{ $labMOrdenResultado->num_procesamientos }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
