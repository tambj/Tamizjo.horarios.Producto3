@extends('layouts.app')

@section('content')

<div class="container text-center">
    <h1 class="mb-5 mt-5">Bienvenidos a Tamizjo Horarios</h1>
    <h5>Porfavor selecciona el perfil con el que desees iniciar sesión</h5>
    <br>
    <div class="row">
        <div class="col-md-4 mx-auto">
        <div class="grid-card">
        <a href="{{ route('user.login') }}">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-mortarboard-fill"></i> Estudiante
            </div>
        </a>
        <a href="{{ route('teacher.login') }}">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-mortarboard-fill"></i> Profesor
            </div>
        </a>
        <a href="{{ route('admin.login') }}">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-terminal-fill"></i> Administrador
            </div>
        </a>
      



    </div>

    </div>
</div>

@endsection

