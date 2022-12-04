@extends('layouts.app')

@section('content')
<!-- Inicio Body -->
<div class="container text-center">
    <h1 class="mb-5 mt-5">Cursos</h1>
    <!-- El contenido va aqui -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.courses.create') }}">
            <div class="nuevo-registro"><i class="bi bi-plus-circle"></i> Nuevo curso</div>
        </a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <!--tabla con los contenidos a mostrar-->
    <table id="tabla" class="table text-center">
        <thead class="thead-light">
            <tr>
                <th style="border-top-left-radius:10px;">ID</th>
                <th>Nombre del curso</th>
                <th>Descripción</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Estado</th>
                <th style="border-top-right-radius:10px;"> Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->date_start }}</td>
                <td>{{ $course->date_end }}</td>
                <td>{{ $course->active }}</td>
                <td>
                    <form action="{{ route('admin.courses.destroy',$course->id) }}" method="POST">
                        <a class="btn btn-sm btn-primary " href="{{ route('admin.courses.show',$course->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                        <a href="{{ route('admin.courses.edit',$course->id) }}"><i class="bi bi-pencil-square icono mr-1"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" style="background-color:transparent;"><i class="bi bi-trash3-fill icono ml-1"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach


@endsection