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
                                    <a class="navbar-brand" href="">Registro Meta</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        <a href="{{ url('listarMetaFutura') }}/{{ $id }}/{{ $tipo }}"
                                            class="btn btn-warning">Regresar</a>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="col-md-6 ml-auto mr-auto">
                            <form action="{{ url('saveMetaFutura') }}" method="POST">
                                @csrf
                                <input type="hidden" id="idIndicador" name="idIndicador" value="{{ $id }}">
                                <input type="hidden" id="tipo" name="tipo" value="{{ $tipo }}">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Enero:</label>
                                    <input type="number" class="form-control" id="enero" name="enero"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Febrero:</label>
                                    <input type="number" class="form-control" id="febrero" name="febrero"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Marzo:</label>
                                    <input type="number" class="form-control" id="marzo" name="marzo"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Abril:</label>
                                    <input type="number" class="form-control" id="abril" name="abril"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mayo:</label>
                                    <input type="number" class="form-control" id="mayo" name="mayo"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Junio:</label>
                                    <input type="number" class="form-control" id="junio" name="junio"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Julio:</label>
                                    <input type="number" class="form-control" id="julio" name="julio"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Agosto:</label>
                                    <input type="number" class="form-control" id="agosto" name="agosto"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Septiembre:</label>
                                    <input type="number" class="form-control" id="septiembre" name="septiembre"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Octubre:</label>
                                    <input type="number" class="form-control" id="octubre" name="octubre"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Noviembre:</label>
                                    <input type="number" class="form-control" id="noviembre" name="noviembre"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Diciembre:</label>
                                    <input type="number" class="form-control" id="diciembre" name="diciembre"
                                        aria-describedby="emailHelp" placeholder="0.00" step='0.01' min="0"
                                        max="10000"value="" required>
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
