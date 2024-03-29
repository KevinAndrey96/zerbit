@extends('layouts.master')
@section('title', 'Muestras de laboratorio')
@section('content')
<div class="container-fluid page__container">
    <div class="container">
        <div class="card">
        <div class="card-header card-header-large bg-white">
            <h4 class="card-header__title">Terapias físicas (Crear)</h4>
        </div>
        <div class="card-body">
            <div id="app" class="content">
                <physical-signature :patients_list="{{$patients}}"
                                    :therapists_list="{{$therapists}}"></physical-signature>
            </div>
            <script src="{{asset('js/app.js')}}"></script>
        </div>
        </div>
    </div>
</div>
@endsection
<script>

</script>