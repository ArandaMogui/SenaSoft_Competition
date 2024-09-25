@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Gen P Ep
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Gen P Ep</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('gen-p-eps.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('gen-p-ep.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
