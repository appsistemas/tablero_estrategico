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
                                    <a class="navbar-brand" href="">Fecha de cierre del tablero</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        {{-- <a href="{{ url('listarUsuario') }}" class="btn btn-warning">Regresar</a> --}}
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="col-md-6 ml-auto mr-auto">
                            <form action="{{ url('saveFecha') }}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$fecha->idconf}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fecha:</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha"
                                        aria-describedby="emailHelp" placeholder="" required value="{{$fecha->fecha}}">
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
