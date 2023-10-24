@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'indicador',
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">{{ __('CONFIGURAR TABLERO') }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-md-1 col-1">
                                        <i class="nc-icon nc-minimal-right"></i>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        {{ __('Paso 1') }}
                                        <br />
                                        <span class="text-muted">
                                            <small>{{ __('Setear') }}</small>
                                        </span>
                                    </div>
                                    <div class="col-md-2 col-2 text-right">
                                        @if ($setear == 1)
                                            <i class="nc-icon nc-check-2"></i>
                                        @endif
                                    </div>
                                    <div class="col-md-5 col-5 text-right">
                                        @if ($setear == 0)
                                            <a href="{{ url('setear') }}"
                                                class="btn btn-sm btn-outline-success btn-round btn-icon"
                                                style="{{ $setearS }}"><i class="fa fa-share"></i></a>
                                        @endif
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1 col-1">
                                        <i class="nc-icon nc-minimal-right"></i>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        {{ __('Paso 2') }}
                                        <br />
                                        <span class="text-success">
                                            <small>{{ __('Inicializar') }}</small>
                                        </span>
                                    </div>
                                    <div class="col-md-2 col-2 text-right">
                                        @if ($inicializar == 1)
                                            <i class="nc-icon nc-check-2"></i>
                                        @endif
                                    </div>
                                    <div class="col-md-5 col-5 text-right">
                                        @if ($inicializar == 0)
                                            <a href="{{ url('inicializar') }}"
                                                class="btn btn-sm btn-outline-success btn-round btn-icon"
                                                style="{{ $inicializarS }}"><i class="fa fa-share"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1 col-1">
                                        <i class="nc-icon nc-minimal-right"></i>
                                    </div>
                                    <div class="col-ms-3 col-3">
                                        {{ __('Paso 3') }}
                                        <br />
                                        <span class="text-danger">
                                            <small>{{ __('Cargar') }}</small>
                                        </span>
                                    </div>
                                    <div class="col-md-2 col-2 text-right">
                                        @if ($cargar == 1)
                                            <i class="nc-icon nc-check-2"></i>
                                        @endif
                                    </div>
                                    <div class="col-md-5 col-5 text-right">
                                        @if ($cargar == 0)
                                            <a href="{{ url('cargar') }}"
                                                class="btn btn-sm btn-outline-success btn-round btn-icon"
                                                style="{{ $cargarS }}"><i class="fa fa-share"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        </ul>
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
