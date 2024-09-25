@extends('layouts.app')

@section('template_title')
    {{ $profesionale->name ?? __('Show') . " " . __('Profesionale') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Profesionale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('profesionales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $profesionale->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Persona:</strong>
                                    {{ $profesionale->id_persona }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registro Medico:</strong>
                                    {{ $profesionale->registro_medico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipo Prof:</strong>
                                    {{ $profesionale->id_tipo_prof }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
