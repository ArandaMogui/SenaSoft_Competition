@extends('layouts.app')

@section('template_title')
    {{ $cup->name ?? __('Show') . " " . __('Cup') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cup</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cups.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $cup->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $cup->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Habilita:</strong>
                                    {{ $cup->habilita }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
