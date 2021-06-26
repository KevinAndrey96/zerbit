@extends('layouts.master')
@section('title', 'Pacientes')
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
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 30px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo paciente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


            </div>
        </div>
    </div>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>
    <style>
        @media only screen and (max-height: 850px) {
            #top-card {
                padding-top: 300px !important;
                padding-right: 20px !important;
            }
        }
    </style>
    <div id="top-card" class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Pacientes</h4>


            </div>
            <div style="padding: 30px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>

                <form method="POST" action="/patients" id="top-card">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Primer Nombre</label>
                            <input class="form-control" id="newPatient.first_name" name="first_name" required>

                        </div>
                        <div class="col-md-6">
                            <label>Segundo Nombre</label>
                            <input class="form-control" id="newPatient.name" name="second_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Primer Apellido</label>
                            <input class="form-control" id="newPatient.first_surname" name="first_surname">
                        </div>
                        <div class="col-md-6">
                            <label>Segundo Apellido</label>
                            <input class="form-control" id="newPatient.second_surname" name="second_surname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Fecha de nacimiento</label>
                            <input type="datetime-local" class="form-control" id="newPatient.birthdate" name="birthdate" required>
                        </div>
                        <div class="col-md-6">
                            <label>Estado civil</label>
                            <input class="form-control" id="newPatient.civil_status" name="civil_status" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Genero</label>
                            <select name="gender" class="form-control">
                                <option value="male">Masculino</option>
                                <option value="female">Femenino</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>EPS</label>
                            <input class="form-control" id="newPatient.eps" name="eps" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Ocupación</label>
                            <input class="form-control" id="newPatient.occupation" name="occupation" required>
                        </div>
                        <div class="col-md-6">
                            <label>Tipo de Documento</label>
                            <select name="document_type" class="form-control">
                                <option value="cc">CC</option>
                                <option value="ti">TI</option>
                                <option value="ce">CE</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Documento</label>
                            <input class="form-control" type="number" id="newPatient.document" name="document" required>
                        </div>
                        <div class="col-md-6">
                            <label>Correo electrónico</label>
                            <input class="form-control" id="newPatient.email" type="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Teléfono</label>
                            <input class="form-control" id="newUser.email" type="number" name="phone" required>
                        </div>
                        <div class="col-md-6">
                            <label>Dirección</label>
                            <input class="form-control" id="newPatient.address" type="text" name="address" required>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Nombre acudiente</label>
                            <input class="form-control" id="newPatient.guardian" type="text" name="guardian">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Teléfono (Acudiente)</label>
                            <input class="form-control" id="newPatient.guardian_phone" type="text" name="guardian_phone">
                        </div>
                        <div class="col-md-6">
                            <label>Relación (Acudiente)</label>
                            <input class="form-control" id="newPatient.guardian_relationship" type="text" name="guardian_relationship">
                        </div>
                    </div>
                    <hr>
                    <input class="form-control" type="submit" class="btn btn-primary" value="Crear Paciente">
                </form>

            </div>

        </div>
    </div>
@endsection