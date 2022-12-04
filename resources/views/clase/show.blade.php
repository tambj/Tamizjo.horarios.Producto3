@extends('layouts.app')

@section('template_title')
    {{ $clase->name ?? 'Show Clase' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Clase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.clases.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Teacher:</strong>
                            {{ $clase->id_teacher }}
                        </div>
                        <div class="form-group">
                            <strong>Id Course:</strong>
                            {{ $clase->id_course }}
                        </div>
                        <div class="form-group">
                            <strong>Id Schedule:</strong>
                            {{ $clase->id_schedule }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $clase->name }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $clase->color }}
                        </div>
                        <div class="form-group">
                            <strong>Created At:</strong>
                            {{ $clase->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Updated At:</strong>
                            {{ $clase->updated_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
