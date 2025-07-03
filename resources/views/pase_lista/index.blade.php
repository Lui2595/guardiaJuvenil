@extends('layouts.admin')

@section('title', 'Pase Lista')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
                <label for="horas">Horas</label>
                <input type="number" class="form-control" id="horas" name="horas">
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4>Pase de Lista</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Unidad</th>
                                <th>Horas</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#fecha").val(new Date().toISOString().split('T')[0]);
            $("#horas").val(2);

            function cargarTabla(data) {
                let tabla = $("#tabla");
                tabla.empty();
                data.forEach(element => {
                    tabla.append("<tr><td>" + element.apellido_paterno + " " + element.apellido_materno +
                        " " + element.nombre +
                        "</td><td>" + element.unidad +
                        "</td><td>" + element.horas +
                        "</td><td><button class='btn btn-primary guardar-asistencia' data-id='" +
                        element.id + "'>Asistencia</button></td></tr>");
                });
                $(".guardar-asistencia").click( async function(event) {
                    //console.log("asd");
                    if ($("#horas").val() == "") {
                        alert("Por favor, ingrese el número de horas");
                        return;
                    }
                    if ($("#fecha").val() == "") {
                        alert("Por favor, ingrese la fecha");
                        return;
                    }
                    $(this).prop("disabled", true);

                    let response = await $.ajax({
                        url: "{{ route('pase_lista.store') }}",
                        type: "POST",
                        data: {
                            id: $(this).data("id"),
                            fecha: $("#fecha").val(),
                            horas: $("#horas").val(),
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {

                            $(event.target).parent().parent().remove();
                            $.notify({
                                icon: 'icon-check',
                                title: 'Asistencia',
                                message: 'Asistencia guardada correctamente',
                            }, {
                                type: 'success',
                                placement: {
                                    from: "bottom",
                                    align: "right"
                                },
                                timer: 500,
                                delay: 500
                            });
                        }
                    });
                    $(this).prop("disabled", false);
                });

            }

            $("#fecha").change(function() {
                $.ajax({
                    url: window.location.href + "/tabla/get",
                    type: "GET",
                    data: {
                        fecha: $(this).val()
                    },
                    success: function(data) {
                        //console.log(data);
                        cargarTabla(data.elementos);
                    }
                });
            });
            $("#fecha").trigger("change");


        });
    </script>
@endpush
