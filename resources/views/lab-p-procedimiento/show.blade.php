@extends('layouts.app')

@section('template_title')
    {{ $labPProcedimiento->name ?? __('Show') . " " . __('Lab P Procedimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lab P Procedimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lab-p-procedimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Cups:</strong>
                                    {{ $labPProcedimiento->id_cups }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Grupo Laboratorio:</strong>
                                    {{ $labPProcedimiento->id_grupo_laboratorio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Metodo:</strong>
                                    {{ $labPProcedimiento->metodo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
