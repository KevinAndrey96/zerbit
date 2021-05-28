@extends('layouts.master')
@section('title', 'Agendar Citas')
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
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendamiento de cita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/appointments" method="POST">

                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="clinical_history_id" name="clinical_history_id" value="">
                        <div class="form-group">
                            <label for="start_time">Paciente</label>
                            <select name="patient_id" class="form-control" id="">
                                @foreach($patients as $patient)
                                    <option value="{{$patient->id}}">{{$patient->first_name. ' ' .$patient->first_surname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="end_time">Fecha y hora</label>
                            <input type="datetime-local" required for="end_time" name="datetime" class="form-control" placeholder="Hora fin">
                        </div>
                        <div class="form-group">
                            <label for="observation" class="col-form-label">Número de autorización</label>
                            <input type="text" required for="observation" name="comment" class="form-control" placeholder="Número de autorización">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Agendar cita</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid page__container">

        <div class="container">

            <div class="card">
                <div class="card-header card-header-large bg-white">
                    <div class="row">
                        <div class="col-md-6" align="left">
                            <h4 class="card-header__title">Agendar citas</h4>
                        </div>
                        <div class="col-md-6" align="right">
                            <button type="button" id="openModal" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Nueva cita</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table-responsive" id="myTable">
                        <thead>
                        <th>ID</th>
                        <th>Paciente</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Comentario</th>
                        <th>Opciones</th>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <input type="hidden" value="{{$appointment->id}}" id="chid">
                                <td>{{$appointment->id}}</td>
                                <td>{{$appointment->patient->first_name.' '.$appointment->patient->first_surname}}</td>
                                <td>{{$appointment->datetime}}</td>
                                <td>
                                    @if($appointment->status == 'cancelled')
                                        <p style="color: #761b18">Cancelado</p>
                                    @elseif($appointment->status == 'scheduled')
                                        <p style="color: #2fa360">Agendado</p>
                                    @endif
                                </td>
                                <td>{{$appointment->comment}}</td>
                                <td>
                                    <form action="/appointments/reminder" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$appointment->patient_id}}" name="patient_id">
                                        <input type="hidden" value="{{$appointment->id}}" name="appointment_id">
                                        <button type="submit" class="btn btn-warning form-control">Recordatorio</button>
                                    </form>
                                    <form action="/appointments/cancel" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$appointment->id}}" name="appointment_id">
                                        <button class="btn btn-danger form-control">Cancelar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(document).ready( function () {
                            $('#myTable').DataTable({
                                responsive: true,
                                "pageLength": 3
                            });
                        } );


                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection