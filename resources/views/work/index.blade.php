@extends('layouts.app')

@section('template_title')
Trabajos
@endsection

@section('content')
<!-- Inicio Body -->
<div class="container text-center">
    <h1 class="mb-5 mt-5">Trabajos</h1>
    <!-- El contenido va aqui -->
    <div class="d-flex justify-content-end mb-3">

        <a href="{{ route('teacher.works.create') }}">
            <div class="nuevo-registro"><i class="bi bi-plus-circle"></i> Nuevo trabajo</div>
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
                <th>Id Clase</th>
                <th>Id Estudiante</th>
                <th>Nombre</th>
                <th>Nota</th>
                <th style="border-top-right-radius:10px;">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($works as $work)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{ $work->id_class }}</td>
                <td>{{ $work->id_student }}</td>
                <td>{{ $work->name }}</td>
                <td>{{ $work->mark }}</td>
                <td>
                    <form action="{{ route('teacher.works.destroy',$work->id) }}" method="POST">
                        <a href="{{ route('teacher.works.edit',$work->id) }}"><i class="bi bi-pencil-square icono mr-1"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color:transparent;"><i class=" bi bi-trash3-fill icono ml-1"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

        <tfooter class="thead-light">
            <tr>
                <th style="border-bottom-left-radius:10px;">ID</th>
                <th>Id Clase</th>
                <th>Id Estudiante</th>
                <th>Nombre</th>
                <th>Nota</th>
                <th style="border-bottom-right-radius:10px;">Acciones</th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
