@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Registar Nuevo Estudiante</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estudiantes.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre"
                                           value="{{ old('nombre') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellido1" class="col-sm-4 col-form-label text-md-right">Primer apellido:</label>
                                <div class="col-md-6">
                                    <input id="apellido1" type="text" class="form-control" name="apellido1"
                                           value="{{ old('apellido1') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellido2" class="col-sm-4 col-form-label text-md-right">Segundo apellido:</label>
                                <div class="col-md-6">
                                    <input id="apellido2" type="text" class="form-control" name="apellido2"
                                           value="{{ old('apellido2') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editorial" class="col-sm-4 col-form-label text-md-right">Fecha Nacimiento:</label>
                                <div class="col-md-6">
                                    <input id="f_nacimiento" type="text" class="form-control" name="f_nacimiento"
                                           value="{{ old('f_nacimiento') }}" autofocus>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="synosis" class="col-sm-4 col-form-label text-md-right">Sipnosis:</label>
                                <div class="col-md-6">
                                    <input id="synosis" type="text" class="form-control" name="synosis"
                                           value="{{ old('synosis') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-4 col-form-label text-md-right">Precio:</label>
                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="price" min="0" step=".01"
                                           value="{{ old('price') }}" autofocus>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar Libro</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
