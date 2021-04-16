@extends('layouts.master')
@section('title', 'Historias clínicas')
@section('content')
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
                                    <a href="/clinical-histories/{{$clinicalHistory->id}}" class="form-control btn btn-primary">Ver PDF</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(document).ready( function () {
                            $('#myTable').DataTable();
                        } );
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection