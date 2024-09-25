@extends('layouts.app')

@section('template_title')
    {{ $facPNivele->name ?? __('Show') . " " . __('Fac P Nivele') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fac P Nivele</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('fac-p-niveles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel:</strong>
                                    {{ $facPNivele->nivel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $facPNivele->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Eps:</strong>
                                    {{ $facPNivele->id_eps }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Regimen:</strong>
                                    {{ $facPNivele->id_regimen }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
