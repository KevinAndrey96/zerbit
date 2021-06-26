@extends('layouts.master')
@section('title', 'Historias clínicas')
@section('content')
    <style>
        .modal-backdrop.show {
            opacity: 0 !important;
            display: none !important;
        }
    </style>
    <script type="text/javascript">
        $(document).on("click", "#openModal", function (e) {
            e.preventDefault();
            var _self = $(this);
            var chid = _self.data('whatever');
            document.getElementById('clinical_history_id').value = chid
        });
    </script>
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creación de evolución</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/evolutions" method="POST">

                <div class="modal-body">
                    @csrf
                        <input type="hidden" id="clinical_history_id" name="clinical_history_id" value="">
                        <div class="form-group">
                            <label for="start_time">Hora inicio</label>
                                <input for="start_time" type="time" name="start_time" class="form-control" placeholder="Hora inicio">
                        </div>
                        <div class="form-group">
                            <label for="end_time">Hora fin</label>
                                <input type="time" for="end_time" name="end_time" class="form-control" placeholder="Hora fin">
                        </div>
                        <div class="form-group">
                            <label for="evolution" class="col-form-label">Evolución</label>
                            <textarea class="form-control" id="evolution" name="evolution_text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="observation" class="col-form-label">Número de autorización</label>
                            <input type="text" for="Número de autorización" name="observation" class="form-control" placeholder="Observación" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear evolución</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <style>
        @media only screen and (max-height: 600px) {
            #top-card {
                padding-top: 200px;
            }
        }
        @media only screen and (max-height: 850px) {
            #top-card {
                padding-top: 100px;
            }
        }
    </style>
    <div id="top-card" class="container-fluid page__container"><style>
            @media only screen and (max-height: 600px) {
                #top-card {
                    padding-top: 200px;
                }
            }
            @media only screen and (max-height: 850px) {
                #top-card {
                    padding-top: 100px;
                }
            }
        </style>
        <div id="top-card" class="container-fluid page__container">
        <div class="container">

            <div class="card">
                <div class="card-header card-header-large bg-white">
                    <h4 class="card-header__title">Historias clínicas</h4>
                </div>
                <div class="card-body">
                    <table class="table-responsive" id="myTable">
                        <thead>
                            <th>ID</th>
                            <th>Documento</th>
                            <th>Paciente</th>
                            <th>Terapeuta</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                        @foreach($clinicalHistories as $clinicalHistory)
                            <tr>
                                <input type="hidden" value="{{$clinicalHistory->id}}" id="chid">
                                <td>{{$clinicalHistory->id}}</td>
                                <td>{{$clinicalHistory->patient->document}}</td>
                                <td>{{$clinicalHistory->patient->first_name.' '.$clinicalHistory->patient->first_surname}}</td>
                                <td>{{$clinicalHistory->professional->name}}</td>
                                <td>{{$clinicalHistory->created_at}}</td>
                                <td>
                                    <button type="button" id="openModal" class="btn btn-info form-control" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$clinicalHistory->id}}">Crear Evolución</button>
                                    <a href="/clinical-histories-pdf/{{$clinicalHistory->id}}" class="form-control btn btn-primary">Ver PDF</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <script>
                        $(document).ready( function () {
                            $('#myTable').DataTable(
                                {
                                    responsive: true,
                                    "pageLength": 5,
                                    "pagingType": "simple",
                                    "order": [[ 0, 'desc' ]]
                                }
                            );
                        } );
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection