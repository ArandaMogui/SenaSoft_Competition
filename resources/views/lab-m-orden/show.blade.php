@extends('layouts.app')

@section('template_title')
    {{ $labMOrden->name ?? __('Show') . " " . __('Lab M Orden') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lab M Orden</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lab-m-ordens.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Documento:</strong>
                                    {{ $labMOrden->id_documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Profesional Ordena:</strong>
                                    {{ $labMOrden->id_profesional_ordena }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Orden:</strong>
                                    {{ $labMOrden->orden }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $labMOrden->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Historia:</strong>
                                    {{ $labMOrden->id_historia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Profesional Externo:</strong>
                                    {{ $labMOrden->profesional_externo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
