<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $unit->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::text('area', $unit->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo edificio') }}
            {{ Form::text('id_building', $unit->id_building, ['class' => 'form-control' . ($errors->has('id_building') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_building', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id empleado') }}
            {{ Form::text('id_employe', $unit->id_employe, ['class' => 'form-control' . ($errors->has('id_employe') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_employe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Proyecto') }}
            {{ Form::text('id_project', $unit->id_project, ['class' => 'form-control' . ($errors->has('id_project') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_project', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>
