@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Lab P Pruebas Opcione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Lab P Pruebas Opcione</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('lab-p-pruebas-opciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lab-p-pruebas-opcione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
