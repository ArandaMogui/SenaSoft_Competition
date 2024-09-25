@extends('layouts.app')

@section('template_title')
    {{ $facPNivel->name ?? __('Show') . " " . __('Fac P Nivel') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fac P Nivel</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('fac-p-nivels.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel:</strong>
                                    {{ $facPNivel->nivel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $facPNivel->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Eps:</strong>
                                    {{ $facPNivel->id_eps }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Regimen:</strong>
                                    {{ $facPNivel->id_regimen }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
