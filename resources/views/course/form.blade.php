<div class="row justify-content-center">
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="mb-2">
                <div class="d-flex mb-2">
                    <label for="id_course">Nombre del curso</label>
                </div>
                {{ Form::text('name', $course->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del curso']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="description">Descripción del curso</label>
            </div>
            {{ Form::text('description', $course->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción del curso']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="date_start">Fecha de inicio</label>
            </div>
            {{ Form::date('date_start', $course->date_start, ['class' => 'form-control' . ($errors->has('date_start') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de inicio']) }}
            {!! $errors->first('date_start', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="date_end">Fecha de finalización</label>
            </div>
            {{ Form::date('date_end', $course->date_end, ['class' => 'form-control' . ($errors->has('date_end') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de finalización']) }}
            {!! $errors->first('date_end', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="active">Activo</label>
            </div>
            {{ Form::number('active', $course->active, ['class' => 'form-control' . ($errors->has('active') ? ' is-invalid' : ''), 'placeholder' => 'Active']) }}
            {!! $errors->first('active', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5">
            <button class="nuevo-registro form-control" type="submit" value="submit">Guardar</button>
        </div>
        <div class="form-group">
            <div class="btn form-control">
                <a class="link-sesion" href="{{ route('admin.courses.index') }}"> Cancelar</a>
            </div>
        </div>
    </div>
</div>