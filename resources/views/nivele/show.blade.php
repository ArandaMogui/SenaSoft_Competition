@extends('layouts.app')

@section('template_title')
    {{ $nivele->name ?? __('Show') . " " . __('Nivele') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nivele</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('niveles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel:</strong>
                                    {{ $nivele->nivel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $nivele->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Eps:</strong>
                                    {{ $nivele->id_eps }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Regimen:</strong>
                                    {{ $nivele->id_regimen }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
