@extends('layouts.app')

@section('template_title')
Exámenes
@endsection

@section('content')
<!-- Inicio Body -->
<div class="container text-center">
    <h1 class="mb-5 mt-5">Exámenes</h1>
    <!-- El contenido va aqui -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('teacher.exams.create') }}">
            <div class="nuevo-registro"><i class="bi bi-plus-circle"></i> Nuevo examen</div>
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
            @foreach ($exams as $exam)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $exam->id_class }}</td>
                <td>{{ $exam->id_student }}</td>
                <td>{{ $exam->name }}</td>
                <td>{{ $exam->mark }}</td>
                <td class="d-flex justify-content-center">
                    <form action="{{ route('teacher.exams.destroy',$exam->id) }}" method="POST">
                        <a href="{{ route('teacher.exams.edit',$exam->id) }}"><i class="bi bi-pencil-square icono mr-1"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color:transparent;"><i class="bi bi-trash3-fill icono ml-1"></i></button>
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
