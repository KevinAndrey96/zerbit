@extends('layouts.master')
@section('title', 'Muestras de laboratorio')
@section('content')
<div class="container-fluid page__container">
    <div class="container">
        <div class="card">
        <div class="card-header card-header-large bg-white">
            <h4 class="card-header__title">Muestras de laboratorio (Crear)</h4>
        </div>
        <div class="card-body">
            <div id="app" class="content">
                <lab-signature :patients_list="{{$patients}}"></lab-signature>
            </div>
            <script src="{{asset('js/app.js')}}"></script>
        </div>
        </div>
    </div>
</div>
@endsection
<script>

</script>