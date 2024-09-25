@extends('layouts.app')

@section('template_title')
    {{ $procedimiento->name ?? __('Show') . " " . __('Procedimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Procedimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('procedimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Cups:</strong>
                                    {{ $procedimiento->id_cups }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Grupo Laboratorio:</strong>
                                    {{ $procedimiento->id_grupo_laboratorio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Metodo:</strong>
                                    {{ $procedimiento->metodo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
