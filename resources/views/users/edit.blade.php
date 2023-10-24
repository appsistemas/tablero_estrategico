@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'filosofia',
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-warning">
                        <nav class="navbar navbar-expand-lg bg-primary">
                            <div class="container">
                                <div class="navbar-translate">
                                    <a class="navbar-brand" href="">Registro Compromiso</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        <a href="{{ url('listarUsuario') }}" class="btn btn-warning">Regresar</a>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="col-md-6 ml-auto mr-auto">
                            <form action="{{ url('editarsaveUsuario') }}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre:</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        aria-describedby="emailHelp" placeholder="" required value="{{ $data->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder=""
                                        required value="{{ $data->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contraseña:</label>
                                    <input type="password" class="form-control" id="pwd" name="pwd"
                                        aria-describedby="emailHelp" placeholder="" required value="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tipo Usuario:</label>
                                    {{ Form::select('rol', $rol, $data->idrol, ['class' => 'form-control text-sm', 'required' => 'true', 'id' => 'rol']) }}
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
