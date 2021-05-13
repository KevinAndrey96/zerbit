@extends('layouts.master')
@section('title', 'Usuarios')
@section('content')
    <style>
        .modal-backdrop.show {
            opacity: 0 !important;
            display: none !important;
        }
    </style>
    <script type="text/javascript">
        $(document).on("click", "#openModal", function (e) {
            e.preventDefault();
            var _self = $(this);
            var chid = _self.data('whatever');
            document.getElementById('clinical_history_id').value = chid
        });
    </script>
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 30px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/users">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                    </div>
                    <input class="form-control" type="text"
                           id="newUser.name"
                           name="name"
                           required
                    >
                    <div class="form-group">
                        <label>Documento</label>
                    </div>
                    <input class="form-control" type="text"
                           id="newUser.document"
                           name="document"
                           required
                    >
                    <div class="form-group">
                        <label>Rol</label>
                    </div>
                    <select name="role" id="" class="form-control">
                        <option value="admin">Administrador</option>
                        <option value="laboratorio">Laboratorio</option>
                        <option value="terapeuta">Terapeuta</option>
                    </select>

                    <div class="form-group">
                        <label>Correo Electrónico</label>
                        <input class="form-control"
                               id="newUser.email"
                               type="email"
                               name="email"
                               required
                        >
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                    </div>

                    <input class="form-control"
                           id="newUser.password"
                           type="password"
                           name="password"
                           required
                    >
                    <br><br>
                    <input class="form-control" type="submit" class="btn btn-primary form-control" value="Crear Usuario">
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-header card-header-large bg-white">
                <h4 class="card-header__title">Usuarios</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Nuevo usuario
                </button>
            </div>
            <div style="padding: 30px" class="" data-toggle="lists"
                 data-lists-values='["js-lists-values-employee-name"]'>
                <table class="table-responsive datatable" id="myTable">
                    <thead>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->document}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                @if(Auth::user()->role == "admin")
                                    <form method="POST" action="/users/{{$user->id}}">
                                        <input  type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <input  type="submit" class="btn btn-danger form-control" value="Eliminar">
                                    </form>
                                    <a class="btn btn-info form-control" href="/signatures/{{$user->id}}">Firma</a>
                                @endif
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