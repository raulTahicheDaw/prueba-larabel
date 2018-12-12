@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div>
                <div class="card">
                    <div class="card-header">Listado de Estudiantes</div>

                    <div class="card-body">
                        <table class="table table-bordered" id="estudiantes">
                            <tr>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Notas</th>
                            </tr>
                            @foreach($estudiantes as $estudiante)
                                <tr data-id="{{$estudiante->dni}}">
                                    <td>{{$estudiante->dni}}</td>
                                    <td>{{$estudiante->nombre}}</td>
                                    <td>{{$estudiante->apellido1}}</td>
                                    <td>{{$estudiante->apellido2}}</td>
                                    <td>{{$estudiante->f_nacimiento}}</td>
                                    <td>
                                        @foreach($estudiante->grades as $nota)
                                            {{$nota->asignatura}}({{$nota->nota}}),
                                        @endforeach
                                    </td>
                                    @if($estudiante->deleted_at)
                                        <td id="borrar" class="botones "><i
                                                class="material-icons icon-red ">close</i></td>
                                    @else
                                        <td id="borrar" class="botones "><a class="btn_borrar" href="#"><i
                                                    class="material-icons icon-red ">delete</i></a></td>
                                    @endif

                                </tr>
                            @endforeach
                        </table>
                        {{ $estudiantes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#estudiantes").on("click", ".btn_borrar", function () {
                var tr = $(this).closest("tr");
                var id = tr.data("id");
                swal("¿Seguro que quieres borrar este estudiante?", {
                    buttons: {
                        cancel: "Cancelar",
                        defeat: "Aceptar",
                    },
                })
                    .then((value) => {
                        switch (value) {
                            case "defeat":
                                $.ajax({
                                    url: "{{url('/estudiantes')}}/" + id,
                                    method: "POST",
                                    data: {
                                        _method: "DELETE",
                                        "_token": "{{ csrf_token() }}",
                                    }
                                    , success: function () {
                                        tr.fadeOut(500, function () {
                                            $(this).remove();
                                        })
                                        M.toast({html: 'Estudiante borrado', classes: 'danger'});
                                    }
                                });

                                break;
                        }
                    });
            });
        });

    </script>
@endsection
