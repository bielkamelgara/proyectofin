@extends('layouts.app')

@section('template_title')
    {{ $project->name ?? "{{ __('Show') Project" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $project->name }}
                        </div>
                        <div class="form-group">
                            <strong>Presupuesto:</strong>
                            {{ $project->budjet }}
                        </div>
                        <div class="form-group">
                            <strong>Id cliente:</strong>
                            {{ $project->id_client }}
                        </div>
                        <div class="form-group">
                            <strong>Id jefe:</strong>
                            {{ $project->id_chief }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
