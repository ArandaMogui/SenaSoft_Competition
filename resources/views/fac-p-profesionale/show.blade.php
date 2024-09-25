@extends('layouts.app')

@section('template_title')
    {{ $facPProfesionale->name ?? __('Show') . " " . __('Fac P Profesionale') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fac P Profesionale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('fac-p-profesionales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $facPProfesionale->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Persona:</strong>
                                    {{ $facPProfesionale->id_persona }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registro Medico:</strong>
                                    {{ $facPProfesionale->registro_medico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipo Prof:</strong>
                                    {{ $facPProfesionale->id_tipo_prof }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
