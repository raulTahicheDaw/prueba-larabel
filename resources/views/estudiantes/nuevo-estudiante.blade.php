@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Nuevo estudiante</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estudiantes.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">DNI</label>
                                <div class="col-md-6">
                                    <input id="dni" type="text" class="form-control" name="dni"
                                           value="{{ old('dni') }}" autofocus>
                                    @if ($errors->has('dni'))
                                        <p class="alert-danger">{{$errors->first('dni')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre"
                                           value="{{ old('nombre') }}" autofocus>
                                    @if ($errors->has('nombre'))
                                        <p class="alert-danger">{{$errors->first('nombre')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellido1" class="col-sm-4 col-form-label text-md-right">Primer
                                    apellido:</label>
                                <div class="col-md-6">
                                    <input id="apellido1" type="text" class="form-control" name="apellido1"
                                           value="{{ old('apellido1') }}" autofocus>
                                    @if ($errors->has('apellido1'))
                                        <p class="alert-danger">{{$errors->first('apellido1')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellido2" class="col-sm-4 col-form-label text-md-right">Segundo
                                    apellido:</label>
                                <div class="col-md-6">
                                    <input id="apellido2" type="text" class="form-control" name="apellido2"
                                           value="{{ old('apellido2') }}" autofocus>
                                    @if ($errors->has('apellido2'))
                                        <p class="alert-danger">{{$errors->first('apellido2')}}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editorial" class="col-sm-4 col-form-label text-md-right">Fecha
                                    Nacimiento:</label>
                                <div class="col-md-6">
                                    <input id="f_nacimiento" type="date" class="form-control" name="f_nacimiento"
                                           value="{{ old('f_nacimiento') }}" autofocus>
                                    @if ($errors->has('dni'))
                                        <p class="alert-danger">{{$errors->first('f_nacimiento')}}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="synosis" class="col-sm-4 col-form-label text-md-right">email:</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" autofocus>
                                    @if ($errors->has('email'))
                                        <p class="alert-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
