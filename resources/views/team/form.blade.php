<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('names', $team->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('surnames', $team->surnames, ['class' => 'form-control' . ($errors->has('surnames') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('surnames', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('sex', $team->sex, ['class' => 'form-control' . ($errors->has('sex') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('sex', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id Proyecto') }}
            {{ Form::text('id_project', $team->id_project, ['class' => 'form-control' . ($errors->has('id_project') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_project', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>
