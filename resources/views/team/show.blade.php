@extends('layouts.app')

@section('template_title')
    {{ $team->name ?? "{{ __('Show') Team" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teams.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $team->names }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $team->surnames }}
                        </div>
                        <div class="form-group">
                            <strong>Sex0:</strong>
                            {{ $team->sex }}
                        </div>
                        <div class="form-group">
                            <strong>id Proyecto:</strong>
                            {{ $team->id_project }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
