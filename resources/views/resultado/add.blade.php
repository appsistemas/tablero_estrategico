@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'addUsuario',
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
                                    <a class="navbar-brand" href="">Registro Valor</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        <a href="{{ url('indicadores') }}/{{ $tipo }}"
                                            class="btn btn-warning">Regresar</a>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="col-md-6 ml-auto mr-auto">
                            <form action="{{ url('saveValor') }}" method="POST">
                                @csrf
                                <input type="hidden" id="idresultado" name="idresultado" value="{{ $idresultado }}">
                                <input type="hidden" id="tipo" name="tipo" value="{{ $tipo }}">
                                <input type="hidden" id="tipoH" name="tipoH" value="{{ $tipoH }}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Objetivo:</label>
                                    <input type="text" class="form-control" id="objetivo" name="objetivo"
                                        aria-describedby="emailHelp" placeholder="" value="{{ $objetivo }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Indicador:</label>
                                    <input type="text" class="form-control" id="indicador" name="indicador"
                                        placeholder="" value="{{ $indicador }}" required>
                                </div>
                                <div class="form-group">
                                    @php
                                        $mes = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                                    @endphp
                                    <label for="exampleInputEmail1">Mes:</label>
                                    <input type="hidden" name="mes" id="mes" value="<?php echo date('n'); ?>">
                                    <input type="text" class="form-control" id="mesnomb" name="mesnomb"
                                        aria-describedby="emailHelp" placeholder="" value="{{ $mes[date('n')] }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Año:</label>
                                    <input type="text" class="form-control" id="ao" name="ao"
                                        aria-describedby="emailHelp" placeholder="" value="{{ date('Y') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta:</label>
                                    <input type="number" class="form-control" id="meta" name="meta"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01'
                                        value="{{ $meta }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Valor:</label>
                                    <input type="number" class="form-control" id="valor" name="valor"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' value=""
                                        required>
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
