@extends('layouts.master')
@section('title', 'Muestras de laboratorio')
@section('content')
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Formatos de consentimiento informado</h4>
            </div>
            <div style="padding-top: 15px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <div id="app" class="content">
                    <samples-component :samples_list="{{$labSamples}}" ></samples-component>
                </div>
                <script src="{{asset('js/app.js')}}"></script>
            </div>

        </div>
    </div>
@endsection
<script>
    createUserRoute = "{{ route('users') }}"
</script>