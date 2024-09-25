@extends('layouts.app')

@section('template_title')
    {{ $tarjetero->name ?? __('Show') . " " . __('Tarjetero') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tarjetero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tarjeteros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Historia:</strong>
                                    {{ $tarjetero->historia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Persona:</strong>
                                    {{ $tarjetero->id_persona }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Regimen:</strong>
                                    {{ $tarjetero->id_regimen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Eps:</strong>
                                    {{ $tarjetero->id_eps }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Nivel:</strong>
                                    {{ $tarjetero->id_nivel }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
