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
            label: "2023",
            // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            data: [
                <?php echo isset($r2023[1]) ? $r2023[1] : 0; ?>,
                <?php echo isset($r2023[2]) ? $r2023[2] : 0; ?>,
                <?php echo isset($r2023[3]) ? $r2023[3] : 0; ?>,
                <?php echo isset($r2023[4]) ? $r2023[4] : 0; ?>,
                <?php echo isset($r2023[5]) ? $r2023[5] : 0; ?>,
                <?php echo isset($r2023[6]) ? $r2023[6] : 0; ?>,
                <?php echo isset($r2023[7]) ? $r2023[7] : 0; ?>,
                <?php echo isset($r2023[8]) ? $r2023[8] : 0; ?>,
                <?php echo isset($r2023[9]) ? $r2023[9] : 0; ?>,
                <?php echo isset($r2023[10]) ? $r2023[10] : 0; ?>,
                <?php echo isset($r2023[11]) ? $r2023[11] : 0; ?>,
                <?php echo isset($r2023[12]) ? $r2023[12] : 0; ?>
            ],
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
            lineTension: 0,
            fill: false,
        };
        const datosVentas2024 = {
            label: "2024",
            // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            data: [
                <?php echo isset($r2024[1]) ? $r2024[1] : 0; ?>,
                <?php echo isset($r2024[2]) ? $r2024[2] : 0; ?>,
                <?php echo isset($r2024[3]) ? $r2024[3] : 0; ?>,
                <?php echo isset($r2024[4]) ? $r2024[4] : 0; ?>,
                <?php echo isset($r2024[5]) ? $r2024[5] : 0; ?>,
                <?php echo isset($r2024[6]) ? $r2024[6] : 0; ?>,
                <?php echo isset($r2024[7]) ? $r2024[7] : 0; ?>,
                <?php echo isset($r2024[8]) ? $r2024[8] : 0; ?>,
                <?php echo isset($r2024[9]) ? $r2024[9] : 0; ?>,
                <?php echo isset($r2024[10]) ? $r2024[10] : 0; ?>,
                <?php echo isset($r2024[11]) ? $r2024[11] : 0; ?>,
                <?php echo isset($r2024[12]) ? $r2024[12] : 0; ?>
            ],
            backgroundColor: 'rgba(255, 159, 64, 0.2)', // Color de fondo
            borderColor: 'rgba(255, 159, 64, 1)', // Color del borde
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
                    datosVentas2024,
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
