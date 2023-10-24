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
                                    <a class="navbar-brand" href="">Desempeño General</a>
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


                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="tablero1" width="400" height="200"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                         <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="tablero2" width="400" height="200"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                         <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="tablero3" width="400" height="200"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                         <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="tablero4" width="400" height="200"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                         <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="tablero5" width="400" height="200"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                         <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="tablero6" width="400" height="200"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                         <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="tablero7" width="500" height="300"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                         <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>


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
            // Obtener una referencia al elemento canvas del DOM
            const $grafica = document.querySelector("#tablero1");
            const $grafica2 = document.querySelector("#tablero2");
            const $grafica3 = document.querySelector("#tablero3");
            const $grafica4 = document.querySelector("#tablero4");
            const $grafica5 = document.querySelector("#tablero5");
            const $grafica6 = document.querySelector("#tablero6");
            const $grafica7 = document.querySelector("#tablero7");
            // Las etiquetas son las que van en el eje X.
            const etiquetas = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ag",
                "Sept", "Oct", "Nov", "Dic"
            ]
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const linea = {
                type: 'line',
                label: 'Meta',
                data: [80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80],
                fill: false,
                borderColor: 'rgba(255, 0, 0, 1)'
            }
            const equipoHumano = {
                label: "Equipo Humano",
                // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                data: [<?php echo $tablero1[1]; ?>, <?php echo $tablero1[2]; ?>, <?php echo $tablero1[3]; ?>, <?php echo $tablero1[4]; ?>,
                    <?php echo $tablero1[5]; ?>, <?php echo $tablero1[6]; ?>, <?php echo $tablero1[7]; ?>, <?php echo $tablero1[8]; ?>,
                    <?php echo $tablero1[9]; ?>,
                    <?php echo $tablero1[10]; ?>, <?php echo $tablero1[11]; ?>, <?php echo $tablero1[12]; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };

            const innovacion = {
                label: "Innovación",
                // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                data: [<?php echo $tablero2[1]; ?>, <?php echo $tablero2[2]; ?>, <?php echo $tablero2[3]; ?>, <?php echo $tablero2[4]; ?>,
                    <?php echo $tablero2[5]; ?>, <?php echo $tablero2[6]; ?>, <?php echo $tablero2[7]; ?>, <?php echo $tablero2[8]; ?>,
                    <?php echo $tablero2[9]; ?>,
                    <?php echo $tablero2[10]; ?>, <?php echo $tablero2[11]; ?>, <?php echo $tablero2[12]; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };

            const mejora = {
                label: "Mejora",
                // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                data: [<?php echo $tablero3[1]; ?>, <?php echo $tablero3[2]; ?>, <?php echo $tablero3[3]; ?>, <?php echo $tablero3[4]; ?>,
                    <?php echo $tablero3[5]; ?>, <?php echo $tablero3[6]; ?>, <?php echo $tablero3[7]; ?>, <?php echo $tablero3[8]; ?>,
                    <?php echo $tablero3[9]; ?>,
                    <?php echo $tablero3[10]; ?>, <?php echo $tablero3[11]; ?>, <?php echo $tablero3[12]; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };

            const participacion = {
                label: "Participación",
                // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                data: [<?php echo $tablero4[1]; ?>, <?php echo $tablero4[2]; ?>, <?php echo $tablero4[3]; ?>, <?php echo $tablero4[4]; ?>,
                    <?php echo $tablero4[5]; ?>, <?php echo $tablero4[6]; ?>, <?php echo $tablero4[7]; ?>, <?php echo $tablero4[8]; ?>,
                    <?php echo $tablero4[9]; ?>,
                    <?php echo $tablero4[10]; ?>, <?php echo $tablero4[11]; ?>, <?php echo $tablero4[12]; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };

            const sustentabilidad = {
                label: "Sustentabilidad",
                // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                data: [<?php echo $tablero5[1]; ?>, <?php echo $tablero5[2]; ?>, <?php echo $tablero5[3]; ?>, <?php echo $tablero5[4]; ?>,
                    <?php echo $tablero5[5]; ?>, <?php echo $tablero5[6]; ?>, <?php echo $tablero5[7]; ?>, <?php echo $tablero5[8]; ?>,
                    <?php echo $tablero5[9]; ?>,
                    <?php echo $tablero5[10]; ?>, <?php echo $tablero5[11]; ?>, <?php echo $tablero5[12]; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };

            const rentabilidad = {
                label: "Rentabilidad",
                // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                data: [<?php echo $tablero6[1]; ?>, <?php echo $tablero6[2]; ?>, <?php echo $tablero6[3]; ?>, <?php echo $tablero6[4]; ?>,
                    <?php echo $tablero6[5]; ?>, <?php echo $tablero6[6]; ?>, <?php echo $tablero6[7]; ?>, <?php echo $tablero6[8]; ?>,
                    <?php echo $tablero6[9]; ?>,
                    <?php echo $tablero6[10]; ?>, <?php echo $tablero6[11]; ?>, <?php echo $tablero6[12]; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };
            const general = {
                label: "Desempeño General",
                // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                data: [
                    <?php echo ($tablero1[1] + $tablero2[1] + $tablero3[1] + $tablero4[1] + $tablero5[1] + $tablero6[1]) / 6; ?>,
                    <?php echo ($tablero1[2] + $tablero2[2] + $tablero3[2] + $tablero4[2] + $tablero5[2] + $tablero6[2]) / 6; ?>,
                    <?php echo ($tablero1[3] + $tablero2[3] + $tablero3[3] + $tablero4[3] + $tablero5[3] + $tablero6[3]) / 6; ?>,
                    <?php echo ($tablero1[4] + $tablero2[4] + $tablero3[4] + $tablero4[4] + $tablero5[4] + $tablero6[4]) / 6; ?>,
                    <?php echo ($tablero1[5] + $tablero2[5] + $tablero3[5] + $tablero4[5] + $tablero5[5] + $tablero6[5]) / 6; ?>,
                    <?php echo ($tablero1[6] + $tablero2[6] + $tablero3[6] + $tablero4[6] + $tablero5[6] + $tablero6[6]) / 6; ?>,
                    <?php echo ($tablero1[7] + $tablero2[7] + $tablero3[7] + $tablero4[7] + $tablero5[7] + $tablero6[7]) / 6; ?>,
                    <?php echo ($tablero1[8] + $tablero2[8] + $tablero3[8] + $tablero4[8] + $tablero5[8] + $tablero6[8]) / 6; ?>,
                    <?php echo ($tablero1[9] + $tablero2[9] + $tablero3[9] + $tablero4[9] + $tablero5[9] + $tablero6[9]) / 6; ?>,
                    <?php echo ($tablero1[10] + $tablero2[10] + $tablero3[10] + $tablero4[10] + $tablero5[10] + $tablero6[10]) / 6; ?>,
                    <?php echo ($tablero1[11] + $tablero2[11] + $tablero3[11] + $tablero4[11] + $tablero5[11] + $tablero6[11]) / 6; ?>,
                    <?php echo ($tablero1[12] + $tablero2[12] + $tablero3[12] + $tablero4[12] + $tablero5[12] + $tablero6[12]) / 6; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };

            new Chart($grafica, {
                type: 'bar', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        equipoHumano,
                        linea,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
            //
            new Chart($grafica2, {
                type: 'bar', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        innovacion,
                        linea,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
            //
            new Chart($grafica3, {
                type: 'bar', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        mejora,
                        linea,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
            //
            new Chart($grafica4, {
                type: 'bar', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        participacion,
                        linea,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
            //
            new Chart($grafica5, {
                type: 'bar', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        sustentabilidad,
                        linea,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
            //
            new Chart($grafica6, {
                type: 'bar', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        rentabilidad,
                        linea,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
            //
            new Chart($grafica7, {
                type: 'bar', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        general,
                        linea,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });


        });
    </script>
@endpush
