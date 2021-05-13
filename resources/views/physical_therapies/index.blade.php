@extends('layouts.master')
@section('title', 'Terapias Físicas')
@section('content')
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Terapias Físicas</h4>
            </div>
            <div style="padding: 20px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <table class="table-responsive datatable" id="myTable">
                    <thead>
                    <th>Id</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th># Sesiones</th>
                    <th>Fecha de creación</th>
                    <th>Firma</th>
                    <th>Opciones</th>
                    </thead>
                    <tbody>
                    @foreach($physicalTherapies as $labSample)
                        <tr>
                            <td>{{$labSample->id}}</td>
                            <td>{{$labSample->patient->document}}</td>
                            <td>{{$labSample->patient->first_name}}</td>
                            <td>{{$labSample->patient->first_surname}}</td>
                            <td>{{$labSample->sessions_number}}</td>
                            <td>{{$labSample->created_at}}</td>
                            <td><img src="{{$labSample->signature}}" onError="this.onerror=null;this.src='data:image/png;base64,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';" height="20px" alt=""></td>
                            <td>
                                <form method="POST" action="/physical-therapies/{{$labSample->id}}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                    <input type="submit" class="btn btn-danger form-control" value="Eliminar">
                                </form>
                                <a href="/physical-therapies/{{$labSample->id}}" class="btn btn-info form-control">Ver</a>
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
                <script src="{{asset('js/app.js')}}"></script>
            </div>

        </div>
    </div>
@endsection
<script>
    createUserRoute = "{{ route('users') }}"
</script>