@extends('layouts.app')

@section('template_title')
    {{ $work->name ?? 'Show Work' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Work</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teacher.works.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Class:</strong>
                            {{ $work->id_class }}
                        </div>
                        <div class="form-group">
                            <strong>Id Student:</strong>
                            {{ $work->id_student }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $work->name }}
                        </div>
                        <div class="form-group">
                            <strong>Mark:</strong>
                            {{ $work->mark }}
                        </div>
                        <div class="form-group">
                            <strong>Created At:</strong>
                            {{ $work->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Updated At:</strong>
                            {{ $work->updated_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
