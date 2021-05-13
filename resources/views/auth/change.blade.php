@extends('layouts.master')
@section('title', 'Usuarios')
@section('content')
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Cambiar Contraseña</h4>
            </div>
            <div style="padding-top: 160px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <div style="padding: 30px" id="app" class="content-fluid" style="padding-bottom: 50px">
                    <form action="/users/change-password" method="post">
                        @csrf
                        <label for="">Contraseña actual</label>
                        <input class="form-control" name="actual" type="password" placeholder="Contraseña actual">
                        <label for="">Nueva contraseña</label>
                        <input class="form-control" type="password" name="new" placeholder="Nueva Contraseña">
                        <label for="">Repita nueva contraseña</label>
                        <input class="form-control" type="password" name="new2" placeholder="Repita nueva Contraseña">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Cambiar contraseña">
                    </form>
                </div>
                <script src="{{asset('js/app.js')}}"></script>
            </div>
        </div>
    </div>
@endsection