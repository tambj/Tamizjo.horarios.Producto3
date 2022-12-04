<div class="row justify-content-center">
    <div class="col-md-4 col-sm-12">

        <div class="form-group">
            <div class="mb-2">
                <div class="d-flex mb-2">
                    <label for="id_teacher">ID profesor</label>
                </div>
                {{ Form::number('id_teacher', $clase->id_teacher, ['class' => 'form-control' . ($errors->has('id_teacher') ? ' is-invalid' : ''), 'placeholder' => 'Id profesor']) }}
                {!! $errors->first('id_teacher', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>


        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="id_course">ID Curso</label>
            </div>
            {{ Form::number('id_course', $clase->id_course, ['class' => 'form-control' . ($errors->has('id_course') ? ' is-invalid' : ''), 'placeholder' => 'Id Curso']) }}
            {!! $errors->first('id_course', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="id_schedule">ID Horario</label>
            </div>
            {{ Form::number('id_schedule', $clase->id_schedule, ['class' => 'form-control' . ($errors->has('id_schedule') ? ' is-invalid' : ''), 'placeholder' => 'Id Horario']) }}
            {!! $errors->first('id_schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="name">Nombre</label>
            </div>
            {{ Form::text('name', $clase->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="color">Color</label>
            </div>
            {{ Form::text('color', $clase->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group mt-5">
            <button class="nuevo-registro form-control" type="submit" value="submit">Guardar</button>
        </div>

        <div class="form-group mb-5">
            <div class="btn form-control">
                <a class="link-sesion" href="{{ route('admin.clases.index') }}"> Cancelar</a>
            </div>
        </div>
    </div>
</div>