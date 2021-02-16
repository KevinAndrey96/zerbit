@extends('layouts.master')
@section('title', 'Usuarios')
@section('content')
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Usuarios</h4>
            </div>
            <div class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <div id="app" class="content">
                    <users-component :users="{{$users}}" ></users-component><!--Añadimos nuestro componente vuejs-->
                </div>
                <script src="{{asset('js/app.js')}}"></script>
            </div>

        </div>
    </div>
@endsection
