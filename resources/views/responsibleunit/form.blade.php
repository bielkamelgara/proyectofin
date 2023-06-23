<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $responsibleunit->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Phone', $responsibleunit->Phone, ['class' => 'form-control' . ($errors->has('Phone') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('sexo', $responsibleunit->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Unidad') }}
            {{ Form::text('id_unit', $responsibleunit->id_unit, ['class' => 'form-control' . ($errors->has('id_unit') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_unit', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>
