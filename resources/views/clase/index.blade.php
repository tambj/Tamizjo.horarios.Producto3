@extends('layouts.app')

@section('template_title')
    Clase
@endsection

@section('content')
<!-- Inicio Body -->
<div class="container text-center">
    <h1 class="mb-5 mt-5">Clases</h1>
    <!-- El contenido va aqui -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.clases.create') }}">
            <div class="nuevo-registro"><i class="bi bi-plus-circle"></i> Nuevo clase</div>
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
                <th>Id Profesor</th>
                <th>Id Curso</th>
                <th>Id Horario</th>
                <th>Nombre</th>
                <th>Color</th>
                <th style="border-top-right-radius:10px;">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clases as $clase)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $clase->id_teacher }}</td>
                    <td>{{ $clase->id_course }}</td>
                    <td>{{ $clase->id_schedule }}</td>
                    <td>{{ $clase->name }}</td>
                    <td>{{ $clase->color }}</td>
                <td class="d-flex justify-content-center">
                    <form action="{{ route('admin.clases.destroy',$clase->id) }}" method="POST">
                        <a href="{{ route('admin.clases.show',$clase->id) }}"><i class="bi bi-eye-fill icono mr-1"></i></a>
                        <a href="{{ route('admin.clases.edit',$clase->id) }}"><i class="bi bi-pencil-square icono mr-1"></i></a>
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
                <th>Id Profesor</th>
                <th>Id Curso</th>
                <th>Id Horario</th>
                <th>Nombre</th>
                <th>Color</th>
                <th style="border-bottom-right-radius:10px;">Acciones</th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
