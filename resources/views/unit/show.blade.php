@extends('layouts.app')

@section('template_title')
    {{ $unit->name ?? "{{ __('Show') Unit" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Unidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('units.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $unit->name }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $unit->area }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo edificio:</strong>
                            {{ $unit->id_building }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $unit->id_employe }}
                        </div>
                        <div class="form-group">
                            <strong>Id Project:</strong>
                            {{ $unit->id_project }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
