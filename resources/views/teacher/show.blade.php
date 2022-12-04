@extends('layouts.app')

@section('template_title')
    {{ $teacher->name ?? 'Show Teacher' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.teachers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $teacher->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $teacher->email }}
                        </div>
                        <div class="form-group">
                            <strong>Nif:</strong>
                            {{ $teacher->nif }}
                        </div>
                        <div class="form-group">
                            <strong>Surname:</strong>
                            {{ $teacher->surname }}
                        </div>
                        <div class="form-group">
                            <strong>Telephone:</strong>
                            {{ $teacher->telephone }}
                        </div>
                        <div class="form-group">
                            <strong>Date Registered:</strong>
                            {{ $teacher->date_registered }}
                        </div>
                        <div class="form-group">
                            <strong>Created At:</strong>
                            {{ $teacher->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Updated At:</strong>
                            {{ $teacher->updated_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
