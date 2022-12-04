@extends('layouts.app')

@section('template_title')
User
@endsection

@section('content')
<!-- Inicio Body -->
<div class="container text-center">
    <h1 class="mb-5 mt-5">Alumnos</h1>
    <!-- El contenido va aqui -->

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.user.register') }}">
            <div class="nuevo-registro"><i class="bi bi-plus-circle"></i> Nuevo alumno</div>
        </a>
    </div>

    <!--tabla con los contenidos a mostrar-->
    <table id="tabla" class="table text-center">
        <thead class="thead-light">
            <tr>
                <th style="border-top-left-radius:10px;">ID Alumno</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Nombre</th>
                <th>Apellido</th>                
                <th>NIF</th>
                <th>Teléfono</th>
                <th>Fecha de Matrícula</th>
                <th style="border-top-right-radius:10px;"> Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>  
                <td>{{ $user->surname }}</td>              
                <td>{{ $user->nif }}</td>                
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->date_registered }}</td>
                <td>
                    <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                        <a href="{{ route('admin.users.edit',$user->id) }}"><i class="bi bi-pencil-square icono mr-1"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="submit" style="background-color:transparent;"><i class="bi bi-trash3-fill icono ml-1"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

        <tfooter class="thead-light">
            <tr>
                <th style="border-bottom-left-radius:10px;">ID Alumno</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Nombre</th>
                <th>Apellido</th>                
                <th>NIF</th>
                <th>Teléfono</th>
                <th>Fecha de Matrícula</th>
                <th style="border-bottom-right-radius:10px;"> Acciones</th>
            </tr>
        </tfooter>
    </table>

    <!-- FIN tabla con los contenidos a mostrar-->

</div>




@endsection