@extends('layouts.app')

@section('template_title')
    Schedule
@endsection

@section('content')
<!-- Inicio Body -->
<div class="container text-center">
    <h1 class="mb-5 mt-5">Horarios</h1>
    <!-- El contenido va aqui -->
    <div class="d-flex justify-content-end mb-3">          
        <a href="{{ route('admin.schedules.create') }}">
            <div class="nuevo-registro"><i class="bi bi-plus-circle"></i> Nuevo Horario</div>
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
                <th>Id Class</th>
                <th>Time Start</th>
                <th>Time End</th>
                <th>Day</th>
                <th style="border-top-right-radius:10px;">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $schedule->id_class }}</td>
                    <td>{{ $schedule->time_start }}</td>
                    <td>{{ $schedule->time_end }}</td>
                    <td>{{ $schedule->day }}</td>
                    <td>
                        <form action="{{ route('admin.schedules.destroy',$schedule->id) }}" method="POST">
                            <a href="{{ route('admin.schedules.show',$schedule->id) }}"><i class="bi bi-eye-fill icono mr-1"></i></a>
                            <a href="{{ route('admin.schedules.edit',$schedule->id) }}"><i class="bi bi-pencil-square icono mr-1"></i></a>
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
                <th>Id Class</th>
                <th>Time Start</th>
                <th>Time End</th>
                <th>Day</th>
                <th style="border-bottom-right-radius:10px;">Acciones</th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
