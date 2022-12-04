@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="mb-5 mt-5">Panel de administración</h1>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="grid-card">
                <a href="{{ route('admin.users.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-mortarboard-fill"></i> Alumnos
                    </div>
                </a>
                <a href="{{ route('admin.teachers.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-briefcase-fill"></i> Profesores
                    </div>
                </a>
                <a href="{{ route('admin.courses.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-clipboard-check"></i> Cursos
                    </div>
                </a>
                <a href="{{ route('admin.enrollments.index') }}" >
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-journal-text"></i> Matrículas
                    </div>
                </a>        
                <a href="{{ route('admin.schedules.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-alarm-fill"></i> Horarios
                    </div>
                </a>
                <a href="{{ route('admin.clases.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-easel"></i> Clases
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection