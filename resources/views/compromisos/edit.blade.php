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
                                        <a href="{{ url('listar') }}" class="btn btn-warning">Regresar</a>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="col-md-6 ml-auto mr-auto">
                            <form action="{{ url('editarsave') }}" method="POST">
                                @csrf
                                <input type="hidden" id="id_compromiso" name="id_compromiso"
                                    value="{{ $data->id_compromiso }}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fecha de Reunión:</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha"
                                        aria-describedby="emailHelp" placeholder="" required value="{{ $data->fecha }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Que?:</label>
                                    <input type="text" class="form-control" id="que" name="que" placeholder=""
                                        required value="{{ $data->que }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quien?:</label>
                                    {{ Form::select('quien', $usuarios, $data->quien, ['class' => 'form-control text-sm', 'required' => 'true', 'id' => 'quien']) }}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cuando?:</label>
                                    <input type="date" class="form-control" id="cuando" name="cuando"
                                        aria-describedby="emailHelp" placeholder="" required value="{{ $data->cuando }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Avance:</label>
                                    <input type="text" class="form-control" id="avance" name="avance" placeholder=""
                                        required value="{{ $data->avance }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Comentario:</label>
                                    <textarea class="form-control" id="comentario" name="comentario" placeholder="" required>{{ $data->comentario }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Estatus:</label>
                                    {{ Form::select('estatus', $modulos, $data->estatus, ['class' => 'form-control', 'data-required' => 'true']) }}
                                    {{-- <select name="estatus" class="form-control" required>
                                        <option value="">SELECCIONE</option>
                                        <option value="FINALIZADO">FINALIZADO</option>
                                        <option value="PROCESO">PROCESO</option>
                                        <option value="PENDIENTE">PENDIENTE</option>
                                    </select> --}}
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
