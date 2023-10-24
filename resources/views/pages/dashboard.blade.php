@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'dashboard',
])

@section('content')
    <div class="content">

        <div class="row">
            <div class="col-md-4">
                <div class="card " style="  background-color: transparent;">
                    <div class="card-header ">
                        <h5 class="card-title">EQUIPO HUMANO</h5>
                        <p class="card-category">{{ $tablero1 }}</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="tablero1"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            @if ($tablero1 <= 100 && $tablero1 >= 90)
                                <i class="fa fa-circle text-success2"></i> Equipo Humano
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero1 <= 90 && $tablero1 >= 80)
                                <i class="fa fa-circle text-warning2"></i> Equipo Humano
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero1 <= 79 && $tablero1 >= 0)
                                <i class="fa fa-circle text-danger2"></i> Equipo Humano
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif

                        </div>

                    </div>
                </div>
            </div>
            {{--  style="  background-color: rgb(237 223 223 / 68%);" --}}
            <div class="col-md-4">
                <div class="card " style="  background-color: transparent;">
                    <div class="card-header ">
                        <h5 class="card-title">INNOVACIÓN</h5>
                        <p class="card-category">{{ $tablero2 }}</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="tablero2"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            @if ($tablero2 <= 100 && $tablero2 >= 90)
                                <i class="fa fa-circle text-success2"></i> Innovación
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero2 <= 90 && $tablero2 >= 80)
                                <i class="fa fa-circle text-warning2"></i> Innovación
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero2 <= 79 && $tablero2 >= 0)
                                <i class="fa fa-circle text-danger2"></i> Innovación
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card " style="  background-color: transparent;">
                    <div class="card-header ">
                        <h5 class="card-title">MEJORAS</h5>
                        <p class="card-category">{{ $tablero3 }}</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="tablero3"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            @if ($tablero3 <= 100 && $tablero3 >= 90)
                                <i class="fa fa-circle text-success2"></i> Mejoras
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero3 <= 90 && $tablero3 >= 80)
                                <i class="fa fa-circle text-warning2"></i> Mejoras
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero3 <= 79 && $tablero3 >= 0)
                                <i class="fa fa-circle text-danger2"></i> Mejoras
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card " style="  background-color: transparent;">
                    <div class="card-header ">
                        <h5 class="card-title">PARTICIPACIÓN</h5>
                        <p class="card-category">{{ $tablero4 }}</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="tablero4"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            @if ($tablero4 <= 100 && $tablero4 >= 90)
                                <i class="fa fa-circle text-success2"></i> Participación
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero4 <= 90 && $tablero4 >= 80)
                                <i class="fa fa-circle text-warning2"></i> Participación
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero4 <= 79 && $tablero4 >= 0)
                                <i class="fa fa-circle text-danger2"></i> Participación
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card " style="  background-color: transparent;">
                    <div class="card-header ">
                        <h5 class="card-title">SUSTENTABILIDAD</h5>
                        <p class="card-category">{{ $tablero5 }}</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="tablero5"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            @if ($tablero5 <= 100 && $tablero5 >= 90)
                                <i class="fa fa-circle text-success2"></i> Sustentabilidad
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero5 <= 90 && $tablero5 >= 80)
                                <i class="fa fa-circle text-warning2"></i> Sustentabilidad
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero5 <= 79 && $tablero5 >= 0)
                                <i class="fa fa-circle text-danger2"></i> Sustentabilidad
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card " style="  background-color: transparent;">
                    <div class="card-header ">
                        <h5 class="card-title">RENTABILIDAD</h5>
                        <p class="card-category">{{ $tablero6 }}</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="tablero6"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            @if ($tablero6 <= 100 && $tablero6 >= 90)
                                <i class="fa fa-circle text-success2"></i> Rentabilidad
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero6 <= 90 && $tablero6 >= 80)
                                <i class="fa fa-circle text-warning2"></i> Rentabilidad
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero6 <= 79 && $tablero6 >= 0)
                                <i class="fa fa-circle text-danger2"></i> Rentabilidad
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card " style=" background-color: transparent;">
                    <div class="card-header ">
                        <h5 class="card-title">DESEMPEÑO GENERAL</h5>
                        <p class="card-category">{{ round($tablero7, 2) }}</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="tablero7"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            @if ($tablero7 <= 100 && $tablero7 >= 90)
                                <i class="fa fa-circle text-success2"></i> Desempeño General
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero7 <= 90 && $tablero7 >= 80)
                                <i class="fa fa-circle text-warning2"></i> Desempeño General
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif
                            @if ($tablero7 <= 79 && $tablero7 >= 0)
                                <i class="fa fa-circle text-danger2"></i> Desempeño General
                                <i class="fa fa-circle text-default"></i> Diferencia
                            @endif

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>




        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            var colors = 0;
            // var etiquetas = ['Equipo Humano', 'Diferencia']
            if (<?php echo $tablero1; ?> <= 100 && <?php echo $tablero1; ?> >= 90) {
                colors = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $tablero1; ?> <= 90 && <?php echo $tablero1; ?> >= 80) {
                colors = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $tablero1; ?> <= 79 && <?php echo $tablero1; ?> >= 0) {
                colors = ['#ff0000', '#e3e3e3']; //rojo

            }

            var colors2 = 0;
            // var etiquetas = ['Equipo Humano', 'Diferencia']
            if (<?php echo $tablero2; ?> <= 100 && <?php echo $tablero2; ?> >= 90) {
                colors2 = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $tablero2; ?> <= 90 && <?php echo $tablero2; ?> >= 80) {
                colors2 = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $tablero2; ?> <= 79 && <?php echo $tablero2; ?> >= 0) {
                colors2 = ['#ff0000', '#e3e3e3']; //rojo

            }

            var colors3 = 0;
            // var etiquetas = ['Equipo Humano', 'Diferencia']
            if (<?php echo $tablero3; ?> <= 100 && <?php echo $tablero3; ?> >= 90) {
                colors3 = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $tablero3; ?> <= 90 && <?php echo $tablero3; ?> >= 80) {
                colors3 = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $tablero3; ?> <= 79 && <?php echo $tablero3; ?> >= 0) {
                colors3 = ['#ff0000', '#e3e3e3']; //rojo

            }

            var colors4 = 0;
            // var etiquetas = ['Equipo Humano', 'Diferencia']
            if (<?php echo $tablero4; ?> <= 100 && <?php echo $tablero4; ?> >= 90) {
                colors4 = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $tablero4; ?> <= 90 && <?php echo $tablero4; ?> >= 80) {
                colors4 = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $tablero4; ?> <= 79 && <?php echo $tablero4; ?> >= 0) {
                colors4 = ['#ff0000', '#e3e3e3']; //rojo

            }

            var colors5 = 0;
            // var etiquetas = ['Equipo Humano', 'Diferencia']
            if (<?php echo $tablero5; ?> <= 100 && <?php echo $tablero5; ?> >= 90) {
                colors5 = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $tablero5; ?> <= 90 && <?php echo $tablero5; ?> >= 80) {
                colors5 = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $tablero5; ?> <= 79 && <?php echo $tablero5; ?> >= 0) {
                colors5 = ['#ff0000', '#e3e3e3']; //rojo

            }

            var colors6 = 0;
            // var etiquetas = ['Equipo Humano', 'Diferencia']
            if (<?php echo $tablero6; ?> <= 100 && <?php echo $tablero6; ?> >= 90) {
                colors6 = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $tablero6; ?> <= 90 && <?php echo $tablero6; ?> >= 80) {
                colors6 = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $tablero6; ?> <= 79 && <?php echo $tablero6; ?> >= 0) {
                colors6 = ['#ff0000', '#e3e3e3']; //rojo

            }

            var colors7 = 0;
            // var etiquetas = ['Equipo Humano', 'Diferencia']
            if (<?php echo $tablero7; ?> <= 100 && <?php echo $tablero7; ?> >= 90) {
                colors7 = ['#20aa0c', '#e3e3e3']; //verde
            }
            if (<?php echo $tablero7; ?> <= 90 && <?php echo $tablero7; ?> >= 80) {
                colors7 = ['#ffff00', '#e3e3e3']; //amarillo
            }
            if (<?php echo $tablero7; ?> <= 79 && <?php echo $tablero7; ?> >= 0) {
                colors7 = ['#ff0000', '#e3e3e3']; //rojo

            }

            const graph = document.querySelector("#tablero1");
            const graph2 = document.querySelector("#tablero2");
            const graph3 = document.querySelector("#tablero3");
            const graph4 = document.querySelector("#tablero4");
            const graph5 = document.querySelector("#tablero5");
            const graph6 = document.querySelector("#tablero6");
            const graph7 = document.querySelector("#tablero7");


            const tablero1 = {
                labels: ['Equipo Humano', 'Diferencia'],
                datasets: [{
                    //label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors,
                    borderWidth: 0,
                    data: [<?php echo $tablero1; ?>, (100 - <?php echo $tablero1; ?>).toFixed(2)]
                }]
            };
            const configTablero1 = {
                type: 'pie',
                data: tablero1,
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
            new Chart(graph, configTablero1);
            //
            const tablero2 = {
                labels: ['Innovación', 'Diferencia'],
                datasets: [{
                    //label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors2,
                    borderWidth: 0,
                    data: [<?php echo $tablero2; ?>, (100 - <?php echo $tablero2; ?>).toFixed(2)]
                }]
            };
            const configTablero2 = {
                type: 'pie',
                data: tablero2,
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
            new Chart(graph2, configTablero2);
            //
            const tablero3 = {
                labels: ['Mejoras', 'Diferencia'],
                datasets: [{
                    //label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors3,
                    borderWidth: 0,
                    data: [<?php echo $tablero3; ?>, (100 - <?php echo $tablero3; ?>).toFixed(2)]
                }]
            };
            const configTablero3 = {
                type: 'pie',
                data: tablero3,
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
            new Chart(graph3, configTablero3);
            //
            const tablero4 = {
                labels: ['Participación', 'Diferencia'],
                datasets: [{
                    //label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors4,
                    borderWidth: 0,
                    data: [<?php echo $tablero4; ?>, (100 - <?php echo $tablero4; ?>).toFixed(2)]
                }]
            };
            const configTablero4 = {
                type: 'pie',
                data: tablero4,
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
            new Chart(graph4, configTablero4);
            //
            const tablero5 = {
                labels: ['Sustentabilidad', 'Diferencia'],
                datasets: [{
                    //label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors5,
                    borderWidth: 0,
                    data: [<?php echo $tablero5; ?>, (100 - <?php echo $tablero5; ?>).toFixed(2)]
                }]
            };
            const configTablero5 = {
                type: 'pie',
                data: tablero5,
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
            new Chart(graph5, configTablero5);
            //
            const tablero6 = {
                labels: ['Rentabilidad', 'Diferencia'],
                datasets: [{
                    //label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors6,
                    borderWidth: 0,
                    data: [<?php echo $tablero6; ?>, (100 - <?php echo $tablero6; ?>).toFixed(2)]
                }]
            };
            const configTablero6 = {
                type: 'pie',
                data: tablero6,
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
            new Chart(graph6, configTablero6);
            //
            const tablero7 = {
                labels: ['Desempeño General', 'Diferencia'],
                datasets: [{
                    //label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: colors7,
                    borderWidth: 0,
                    data: [<?php echo $tablero7; ?>, (100 - <?php echo $tablero7; ?>).toFixed(2)]
                }]
            };
            const configTablero7 = {
                type: 'pie',
                data: tablero7,
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
            new Chart(graph7, configTablero7);


        });
    </script>
@endpush
