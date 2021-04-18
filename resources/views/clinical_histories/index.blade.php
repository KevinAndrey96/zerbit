@extends('layouts.master')
@section('title', 'Historias clínicas')
@section('content')
    <style>
        .modal-backdrop.show {
            opacity: 0 !important;
            display: none !important;
        }
    </style>
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creación de evolución</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="clinical_history_id" name="clinical_history_id" value="">

                    <form>
                        <div class="form-group">
                            <label for="start_time" >Hora inicio</label>
                                <input for="start_time" type="text" name="start_time" class="form-control" placeholder="Hora inicio">
                        </div>
                        <div class="form-group">
                            <label for="end_time">Hora fin</label>
                                <input type="text" for="end_time" name="end_time" class="form-control" placeholder="Hora fin">
                        </div>
                        <div class="form-group">
                            <label for="evolution" class="col-form-label">Evolución</label>
                            <textarea class="form-control" id="evolution" name="evolution_text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="observation" class="col-form-label">Observación</label>
                            <input type="text" for="observation" name="observation" class="form-control" placeholder="Hora fin">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Crear evolución</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid page__container">

        <div class="container">

            <div class="card">
                <div class="card-header card-header-large bg-white">
                    <h4 class="card-header__title">Historias clínicas</h4>
                </div>
                <div class="card-body">
                    <table class="table" id="myTable">
                        <thead>
                            <th>ID</th>
                            <th>Paciente</th>
                            <th>Terapeuta</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                        @foreach($clinicalHistories as $clinicalHistory)
                            <tr>
                                <td>{{$clinicalHistory->id}}</td>
                                <td>{{$clinicalHistory->patient->first_name.' '.$clinicalHistory->patient->first_surname}}</td>
                                <td>{{$clinicalHistory->professional->name}}</td>
                                <td>
                                    <button type="button" class="btn btn-info form-control" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$clinicalHistory->id}}">Crear Evolución</button>
                                    <a href="/clinical-histories/{{$clinicalHistory->id}}" class="form-control btn btn-primary">Ver PDF</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <script>
                        $('#exampleModal').on('show.bs.modal', function (event) {
                            var button = $(event.relatedTarget) // Button that triggered the modal
                            var ch = $(event.relatedTarget).data('whatever')// Extract info from data-* attributes
                            $(e.currentTarget).find('input[name="clinical_history_id"]').val(ch);
                            var modal = $(this)
                            modal.find('modal-body #clinical_history_id').val(ch)
                        })
                        $(document).ready( function () {
                            $('#myTable').DataTable();
                        } );
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection