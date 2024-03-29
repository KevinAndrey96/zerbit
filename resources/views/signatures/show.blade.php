@extends('layouts.master')
@section('title', 'Usuarios')
@section('content')
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Firma</h4>
                <a  href="/signatures/create/{{$user->id}}"> Actualizar Firma</a>
            </div>
            <div style="padding-top: 160px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <div id="app" class="content-fluid" style="padding-bottom: 50px">
                    <div style="text-align: center;"><img src="{{ $user->signature }}" alt="{{ $user->id }}" onError="this.onerror=null;this.src='/assets/images/logo.png';"  /></div>
                </div>
                <script src="{{asset('js/app.js')}}"></script>
            </div>
        </div>
    </div>
@endsection