@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'meses',
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-default">
                        <nav class="navbar navbar-expand-lg bg-primary">
                            <div class="container">
                                <div class="navbar-translate">
                                    <a class="navbar-brand" href="">Indicadores por Meses</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        <a href="{{ url('tableros') }}/{{ $tipo }}"
                                            class="btn btn-warning">Regresar</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">ENERO</h5>
                                        <a href="{{ url('mes/1') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="enero"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($enero <= 100 && $enero >= 90)
                                                <i class="fa fa-circle text-success2"></i> Enero
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($enero <= 90 && $enero >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Enero
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($enero <= 79 && $enero >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Enero
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">FEBRERO</h5>
                                        <a href="{{ url('mes/2') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="febrero"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($febrero <= 100 && $febrero >= 90)
                                                <i class="fa fa-circle text-success2"></i> Febrero
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($febrero <= 90 && $febrero >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Febrero
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($febrero <= 79.99 && $febrero >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Febrero
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">MARZO</h5>
                                        <a href="{{ url('mes/3') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="marzo"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($marzo <= 100 && $marzo >= 90)
                                                <i class="fa fa-circle text-success2"></i> Marzo
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($marzo <= 90 && $marzo >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Marzo
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($marzo <= 79 && $marzo >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Marzo
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">ABRIL</h5>
                                        <a href="{{ url('mes/4') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="abril"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($abril <= 100 && $abril >= 90)
                                                <i class="fa fa-circle text-success2"></i> Abril
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($abril <= 90 && $abril >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Abril
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($abril <= 79 && $abril >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Abril
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">MAYO</h5>
                                        <a href="{{ url('mes/5') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="mayo"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($mayo <= 100 && $mayo >= 90)
                                                <i class="fa fa-circle text-success2"></i> Mayo
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($mayo <= 90 && $mayo >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Mayo
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($mayo <= 79 && $mayo >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Mayo
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">JUNIO</h5>
                                        <a href="{{ url('mes/6') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="junio"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($junio <= 100 && $junio >= 90)
                                                <i class="fa fa-circle text-success2"></i> Junio
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($junio <= 90 && $junio >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Junio
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($junio <= 79 && $junio >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Junio
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">JULIO</h5>
                                        <a href="{{ url('mes/7') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="julio"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($julio <= 100 && $julio >= 90)
                                                <i class="fa fa-circle text-success2"></i> Julio
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($julio <= 90 && $julio >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Julio
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($julio <= 79 && $julio >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Julio
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">AGOSTO</h5>
                                        <a href="{{ url('mes/8') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="agosto"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($agosto <= 100 && $agosto >= 90)
                                                <i class="fa fa-circle text-success2"></i> Agosto
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($agosto <= 90 && $agosto >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Agosto
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($agosto <= 79 && $agosto >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Agosto
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">SEPTIEMBRE</h5>
                                        <a href="{{ url('mes/9') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="septiembre"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($septiembre <= 100 && $septiembre >= 90)
                                                <i class="fa fa-circle text-success2"></i> Septiembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($septiembre <= 90 && $septiembre >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Septiembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($septiembre <= 79 && $septiembre >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Septiembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">OCTUBRE</h5>
                                        <a href="{{ url('mes/10') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="octubre"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($octubre <= 100 && $octubre >= 90)
                                                <i class="fa fa-circle text-success2"></i> Octubre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($octubre <= 90 && $octubre >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Octubre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($octubre <= 79 && $octubre >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Octubre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">NOVIEMBRE</h5>
                                        <a href="{{ url('mes/11') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="noviembre"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($noviembre <= 100 && $noviembre >= 90)
                                                <i class="fa fa-circle text-success2"></i> Noviembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($noviembre <= 90 && $noviembre >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Noviembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($noviembre <= 79 && $noviembre >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Noviembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h5 class="card-title">DICIEMBRE</h5>
                                        <a href="{{ url('mes/12') }}/{{ $tipo }}">Datos</a>
                                    </div>
                                    <div class="card-body ">
                                        <canvas id="diciembre"></canvas>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="legend">
                                            @if ($diciembre <= 100 && $diciembre >= 90)
                                                <i class="fa fa-circle text-success2"></i> Diciembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($diciembre <= 90 && $diciembre >= 80)
                                                <i class="fa fa-circle text-warning2"></i> Diciembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif
                                            @if ($diciembre <= 79 && $diciembre >= 0)
                                                <i class="fa fa-circle text-danger2"></i> Diciembre
                                                <i class="fa fa-circle text-default"></i> Diferencia
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>

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
            var colors = 0;
            //const labels = ['Enero', 'Diferencia']
            if (<?php echo $enero; ?> <= 100 && <?php echo $enero; ?> >= 90) {
                colors = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $enero; ?> <= 90 && <?php echo $enero; ?> >= 80) {
                colors = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $enero; ?> <= 79 && <?php echo $enero; ?> >= 0) {
                colors = ['#ff0000', '#e3e3e3']; //rojo

            }

            const graph = document.querySelector("#enero");
            const graph2 = document.querySelector("#febrero");
            const graph3 = document.querySelector("#marzo");
            const graph4 = document.querySelector("#abril");
            const graph5 = document.querySelector("#mayo");
            const graph6 = document.querySelector("#junio");
            const graph7 = document.querySelector("#julio");
            const graph8 = document.querySelector("#agosto");
            const graph9 = document.querySelector("#septiembre");
            const graph10 = document.querySelector("#octubre");
            const graph11 = document.querySelector("#noviembre");
            const graph12 = document.querySelector("#diciembre");


            const enero = {
                labels: ['Enero', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors,
                    borderWidth: 0,
                    data: [<?php echo $enero; ?>, (100 - <?php echo $enero; ?>).toFixed(2)]
                }]
            };
            const configEnero = {
                type: 'pie',
                data: enero,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph, configEnero);
            var colors_f = 0;
            if (<?php echo $febrero; ?> <= 100 && <?php echo $febrero; ?> >= 90) {
                colors_f = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $febrero; ?> <= 90 && <?php echo $febrero; ?> >= 80) {
                colors_f = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $febrero; ?> <= 79,99 && <?php echo $febrero; ?> >= 0) {
                colors_f = ['#ff0000', '#e3e3e3']; //rojo
            }
            const febrero = {
                labels: ['Febrero', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_f,
                    borderWidth: 0,
                    data: [<?php echo $febrero; ?>, (100 - <?php echo $febrero; ?>).toFixed(2)]
                }]
            };
            const configFebrero = {
                type: 'pie',
                data: febrero,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph2, configFebrero);
            var colors_m = 0;
            if (<?php echo $marzo; ?> <= 100 && <?php echo $marzo; ?> >= 90) {
                colors_m = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $marzo; ?> <= 90 && <?php echo $marzo; ?> >= 80) {
                colors_m = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $marzo; ?> <= 79,99 && <?php echo $marzo; ?> >= 0) {
                colors_m = ['#ff0000', '#e3e3e3']; //rojo
            }
            const marzo = {
                labels: ['Marzo', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_m,
                    borderWidth: 0,
                    data: [<?php echo $marzo; ?>, (100 - <?php echo $marzo; ?>).toFixed(2)]
                }]
            };
            const configMarzo = {
                type: 'pie',
                data: marzo,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph3, configMarzo);
            var colors_a = 0;
            if (<?php echo $abril; ?> <= 100 && <?php echo $abril; ?> >= 90) {
                colors_a = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $abril; ?> <= 90 && <?php echo $abril; ?> >= 80) {
                colors_a = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $abril; ?> <= 79 && <?php echo $abril; ?> >= 0) {
                colors_a = ['#ff0000', '#e3e3e3']; //rojo
            }
            const abril = {
                labels: ['Abril', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_a,
                    borderWidth: 0,
                    data: [<?php echo $abril; ?>, (100 - <?php echo $abril; ?>).toFixed(2)]
                }]
            };
            const configAbril = {
                type: 'pie',
                data: abril,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph4, configAbril);
            var colors_ma = 0;
            if (<?php echo $mayo; ?> <= 100 && <?php echo $mayo; ?> >= 90) {
                colors_ma = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $mayo; ?> <= 90 && <?php echo $mayo; ?> >= 80) {
                colors_ma = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $mayo; ?> <= 79 && <?php echo $mayo; ?> >= 0) {
                colors_ma = ['#ff0000', '#e3e3e3']; //rojo
            }
            const mayo = {
                labels: ['Mayo', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_ma,
                    borderWidth: 0,
                    data: [<?php echo $mayo; ?>, (100 - <?php echo $mayo; ?>).toFixed(2)]
                }]
            };
            const configMayo = {
                type: 'pie',
                data: mayo,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph5, configMayo);
            var colors_j = 0;
            if (<?php echo $junio; ?> <= 100 && <?php echo $junio; ?> >= 90) {
                colors_j = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $junio; ?> <= 90 && <?php echo $junio; ?> >= 80) {
                colors_j = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $junio; ?> <= 79 && <?php echo $junio; ?> >= 0) {
                colors_j = ['#ff0000', '#e3e3e3']; //rojo
            }
            const junio = {
                labels: ['Junio', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_j,
                    borderWidth: 0,
                    data: [<?php echo $junio; ?>, (100 - <?php echo $junio; ?>).toFixed(2)]
                }]
            };
            const configJunio = {
                type: 'pie',
                data: junio,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph6, configJunio);
            var colors_ju = 0;
            if (<?php echo $julio; ?> <= 100 && <?php echo $julio; ?> >= 90) {
                colors_ju = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $julio; ?> <= 90 && <?php echo $julio; ?> >= 80) {
                colors_ju = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $julio; ?> <= 79 && <?php echo $julio; ?> >= 0) {
                colors_ju = ['#ff0000', '#e3e3e3']; //rojo
            }
            const julio = {
                labels: ['Julio', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_ju,
                    borderWidth: 0,
                    data: [<?php echo $julio; ?>, (100 - <?php echo $julio; ?>).toFixed(2)]
                }]
            };
            const configJulio = {
                type: 'pie',
                data: julio,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph7, configJulio);
            var colors_ag = 0;
            if (<?php echo $agosto; ?> <= 100 && <?php echo $agosto; ?> >= 90) {
                colors_ag = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $agosto; ?> <= 90 && <?php echo $agosto; ?> >= 80) {
                colors_ag = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $agosto; ?> <= 79 && <?php echo $agosto; ?> >= 0) {
                colors_ag = ['#ff0000', '#e3e3e3']; //rojo
            }
            const agosto = {
                labels: ['Agosto', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_ag,
                    borderWidth: 0,
                    data: [<?php echo $agosto; ?>, (100 - <?php echo $agosto; ?>).toFixed(2)]
                }]
            };
            const configAgosto = {
                type: 'pie',
                data: agosto,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph8, configAgosto);
            var colors_sp = 0;
            if (<?php echo $septiembre; ?> <= 100 && <?php echo $septiembre; ?> >= 90) {
                colors_sp = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $septiembre; ?> <= 90 && <?php echo $septiembre; ?> >= 80) {
                colors_sp = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $septiembre; ?> <= 79 && <?php echo $septiembre; ?> >= 0) {
                colors_sp = ['#ff0000', '#e3e3e3']; //rojo
            }
            const septiembre = {
                labels: ['Septiembre', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_sp,
                    borderWidth: 0,
                    data: [<?php echo $septiembre; ?>, (100 - <?php echo $septiembre; ?>).toFixed(2)]
                }]
            };
            const configSeptiembre = {
                type: 'pie',
                data: septiembre,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph9, configSeptiembre);

            var colors_oc = 0;
            if (<?php echo $octubre; ?> <= 100 && <?php echo $octubre; ?> >= 90) {
                colors_oc = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $octubre; ?> <= 90 && <?php echo $octubre; ?> >= 80) {
                colors_oc = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $octubre; ?> <= 79 && <?php echo $octubre; ?> >= 0) {
                colors_oc = ['#ff0000', '#e3e3e3']; //rojo
            }
            const octubre = {
                labels: ['Octubre', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors,
                    borderWidth: 0,
                    data: [<?php echo $octubre; ?>, (100 - <?php echo $octubre; ?>).toFixed(2)]
                }]
            };
            const configOctubre = {
                type: 'pie',
                data: octubre,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph10, configOctubre);

            var colors_no = 0;
            if (<?php echo $noviembre; ?> <= 100 && <?php echo $noviembre; ?> >= 90) {
                colors_no = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $noviembre; ?> <= 90 && <?php echo $noviembre; ?> >= 80) {
                colors_no = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $noviembre; ?> <= 79 && <?php echo $noviembre; ?> >= 0) {
                colors_no = ['#ff0000', '#e3e3e3']; //rojo
            }
            const noviembre = {
                labels: ['Noviembre', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_no,
                    borderWidth: 0,
                    data: [<?php echo $noviembre; ?>, (100 - <?php echo $noviembre; ?>).toFixed(2)]
                }]
            };
            const configNoviembre = {
                type: 'pie',
                data: noviembre,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph11, configNoviembre);

            var colors_di = 0;
            if (<?php echo $diciembre; ?> <= 100 && <?php echo $diciembre; ?> >= 90) {
                colors_di = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $diciembre; ?> <= 90 && <?php echo $diciembre; ?> >= 80) {
                colors_di = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $diciembre; ?> <= 79 && <?php echo $diciembre; ?> >= 0) {
                colors_di = ['#ff0000', '#e3e3e3']; //rojo
            }
            const diciembre = {
                labels: ['Diciembre', 'Diferencia'],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors_di,
                    borderWidth: 0,
                    data: [<?php echo $diciembre; ?>, (100 - <?php echo $diciembre; ?>).toFixed(2)]
                }]
            };
            const configDiciembre = {
                type: 'pie',
                data: diciembre,
                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: true
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                },
            };
            new Chart(graph12, configDiciembre);

        });
    </script>
@endpush
