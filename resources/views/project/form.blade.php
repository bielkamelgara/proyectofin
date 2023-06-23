<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $project->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Presupuesto') }}
            {{ Form::text('budjet', $project->budjet, ['class' => 'form-control' . ($errors->has('budjet') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('budjet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id cliente') }}
            {{ Form::text('id_client', $project->id_client, ['class' => 'form-control' . ($errors->has('id_client') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_client', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id jefe') }}
            {{ Form::text('id_chief', $project->id_chief, ['class' => 'form-control' . ($errors->has('id_chief') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('id_chief', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>
