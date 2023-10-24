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
                                    <a class="navbar-brand" href="">{{ $objetivo }}</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        <a href="{{ url('indicadoresMeses') }}/{{ $tipo }}"
                                            class="btn btn-warning">Regresar</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card card-chart">
                                    <div class="card-header">
                                        {{--                                         <h5 class="card-title">NASDAQ: AAPL</h5>
                                        <p class="card-category">Line Chart with Points</p> --}}
                                    </div>
                                    <div class="card-body">
                                        <canvas id="demo" width="400" height="100"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        {{--                                      <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Indicadores por Mes
                                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        </div>
                                        <hr />
                                        <div class="card-stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div> --}}
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
        // Obtener una referencia al elemento canvas del DOM
        const graph = document.querySelector("#demo");
        //const graph = document.getElementById('grafica');
        //graph = document.getElementById('grafica').getContext("2d");
        // Las etiquetas son las que van en el eje X.
        const etiquetas = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
            "Octubre", "Noviembre", "Diciembre"
        ]
        // Podemos tener varios conjuntos de datos. Comencemos con uno

        const datosVentas2023 = {
            label: "Indicador por mes",
            // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            data: [
                <?php echo isset($meses[1]) ? $meses[1] : 0; ?>,
                <?php echo isset($meses[2]) ? $meses[2] : 0; ?>,
                <?php echo isset($meses[3]) ? $meses[3] : 0; ?>,
                <?php echo isset($meses[4]) ? $meses[4] : 0; ?>,
                <?php echo isset($meses[5]) ? $meses[5] : 0; ?>,
                <?php echo isset($meses[6]) ? $meses[6] : 0; ?>,
                <?php echo isset($meses[7]) ? $meses[7] : 0; ?>,
                <?php echo isset($meses[8]) ? $meses[8] : 0; ?>,
                <?php echo isset($meses[9]) ? $meses[9] : 0; ?>,
                <?php echo isset($meses[10]) ? $meses[10] : 0; ?>,
                <?php echo isset($meses[11]) ? $meses[11] : 0; ?>,
                <?php echo isset($meses[12]) ? $meses[12] : 0; ?>
            ],
            //backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
            lineTension: 0,
            fill: false,
        };


        const config = {
            type: 'line', // Tipo de gráfica
            data: {
                labels: etiquetas,
                datasets: [
                    datosVentas2023,
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
        };

        new Chart(graph, config);
        $(document).ready(function() {});
    </script>
@endpush
