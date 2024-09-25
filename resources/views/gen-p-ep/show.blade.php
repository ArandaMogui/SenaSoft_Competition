@extends('layouts.app')

@section('template_title')
    {{ $genPEp->name ?? __('Show') . " " . __('Gen P Ep') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Gen P Ep</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('gen-p-eps.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $genPEp->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Razonsocial:</strong>
                                    {{ $genPEp->razonsocial }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nit:</strong>
                                    {{ $genPEp->nit }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Habilita:</strong>
                                    {{ $genPEp->habilita }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
