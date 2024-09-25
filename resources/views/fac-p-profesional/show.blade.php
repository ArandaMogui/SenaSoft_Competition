@extends('layouts.app')

@section('template_title')
    {{ $facPProfesional->name ?? __('Show') . " " . __('Fac P Profesional') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fac P Profesional</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('fac-p-profesionals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $facPProfesional->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Persona:</strong>
                                    {{ $facPProfesional->id_persona }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registro Medico:</strong>
                                    {{ $facPProfesional->registro_medico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipo Prof:</strong>
                                    {{ $facPProfesional->id_tipo_prof }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
