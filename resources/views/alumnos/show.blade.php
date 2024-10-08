@extends('plantilla.plantilla1')

@section('contenido1')
    @include('alumnos.tablahtml')
@endsection

@section('contenido2')
    <h1>Ver todos los datos</h1>
    <div class="container">
        <form action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumno->nombre}}" placeholder="Nombre del alumno" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellido" class="col-4 col-form-label">Apellido:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellido" value="{{$alumno->apellido}}" id="apellido" placeholder="Apellido del alumno" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">E-mail:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="email" id="email" value="{{$alumno->email}}" placeholder="Email del alumno" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                        Confirmar la eliminacion
                </button>
                <a href="{{route('alumnos.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
        
    </form>
    </div>
@endsection
