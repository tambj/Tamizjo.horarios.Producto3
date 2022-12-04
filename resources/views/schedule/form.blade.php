<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_class') }}
            {{ Form::number('id_class', $schedule->id_class, ['class' => 'form-control' . ($errors->has('id_class') ? ' is-invalid' : ''), 'placeholder' => 'Id Class']) }}
            {!! $errors->first('id_class', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time_start') }}
            {{ Form::time('time_start', $schedule->time_start, ['class' => 'form-control' . ($errors->has('time_start') ? ' is-invalid' : ''), 'placeholder' => 'Time Start']) }}
            {!! $errors->first('time_start', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time_end') }}
            {{ Form::time('time_end', $schedule->time_end, ['class' => 'form-control' . ($errors->has('time_end') ? ' is-invalid' : ''), 'placeholder' => 'Time End']) }}
            {!! $errors->first('time_end', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('day') }}
            {{ Form::date('day', $schedule->day, ['class' => 'form-control' . ($errors->has('day') ? ' is-invalid' : ''), 'placeholder' => 'Day']) }}
            {!! $errors->first('day', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
