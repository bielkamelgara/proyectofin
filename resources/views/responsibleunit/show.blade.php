@extends('layouts.app')

@section('template_title')
    {{ $responsibleunit->name ?? "{{ __('Show') Responsibleunit" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Responsable de unidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('responsibleunits.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $responsibleunit->name }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $responsibleunit->Phone }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $responsibleunit->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Unidad:</strong>
                            {{ $responsibleunit->id_unit }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
