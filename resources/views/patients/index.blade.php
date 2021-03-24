@extends('layouts.master')
@section('title', 'Pacientes')
@section('content')
    <script src="{{asset('js/app.js')}}"></script>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Pacientes</h4>
            </div>
            <div style="padding-top: 15px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <div id="app" class="content">
                    <patients-component :patients_list="{{$patients}}" ></patients-component>
                </div>

            </div>

        </div>
    </div>
@endsection