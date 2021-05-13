@extends('layouts.master')
@section('title', 'Usuarios')
@section('content')
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Firma</h4>
            </div>
            <div style="padding-top: 160px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <div id="app" class="content">
                    <signature-pad></signature-pad>
                </div>
                <script src="{{asset('js/app.js')}}"></script>
            </div>

        </div>
    </div>
@endsection