@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'indicadorEdit',
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
                                    <a class="navbar-brand" href="">{{ $indicador }}</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        {{-- <a href="{{ url('editConfiguracion') }}/{{ $tipo }}"
                                            class="btn btn-warning">Regresar</a> --}}
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">

                        <div class=""> {{-- table-responsive --}}
                            <table class="table" style="font-size: 10px">
                                <thead>
                                    <tr>
                                        <th style="color: #9a0202; font-size: 12px;"> ID </th>
                                        <th style="color: #9a0202; font-size: 12px;width:20%;"> OBJETIVO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> TIPO</th>
                                        <th style="color: #9a0202; font-size: 12px;"> PROCESO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> RESPONSABLE</th>
                                        <th style="color: #9a0202; font-size: 12px; width:5%;"> PESO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> INDICADOR </th>
                                        <th style="color: #9a0202; font-size: 12px; width:10%;" class="text-center"> METAS
                                        </th>
                                        <th style="color: #9a0202; font-size: 12px; width:5%;"> MES </th>
                                        <th style="color: #9a0202; font-size: 12px;"> AÑO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> VALOR </th>
                                        <th style="color: #9a0202; font-size: 12px; width:15%;" class="text-center">
                                            ACCIONES </th>
                                    </tr>
                                    <tr>
                                        <td><strong>O1.</strong></td>
                                        <td><strong>{{ $objetivo }}</strong>
                                        </td>
                                        <td><strong><i class="fa fa-long-arrow-up"></strong></i></td>
                                        <td><strong>FABRIBAT</strong></td>
                                        <td><strong>Responsable</strong></td>
                                        <td><strong>100</strong></td>
                                        <td><strong>Cumplimiento Ponderado</strong></td>
                                        <td align="center"><strong>
                                                <table>
                                                    <tr>
                                                        <td style="background-color:#03ca49; padding: 1px;">[ &nbsp;100 ]
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color:#fff700; padding: 1px;">[
                                                            &nbsp;&nbsp;&nbsp;95
                                                            ]
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color:#FF0000; padding: 1px;">
                                                            [ < 95 ]</td>
                                                    </tr>
                                                </table>
                                            </strong></td>
                                        <td><strong>Enero</strong></td>
                                        <td><strong>2023</strong></td>
                                        <td class="text-center"><strong>100</strong></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="">{{ $item->codigo }}</td>
                                            <td class="">{{ $item->objetivo }}</td>
                                            <?php if ($item->tipo  == 'h') { ?>
                                            <td><i class="fa fa-long-arrow-up"></i></td>
                                            <?php } elseif ($item->tipo == 'i') { ?>
                                            <td><i class="fa fa-long-arrow-down"></i></td>
                                            <?php } elseif ($item->tipo == 'n') { ?>
                                            <td><i class="fa fa-arrows-h"></i></td>
                                            <?php } ?>
                                            <td>{{ $item->procesoGestion }} </td>
                                            <td>{{ $item->responsable()->first()->name }}</td>
                                            <td>{{ $item->peso }} </td>
                                            <td>{{ $item->indicador }} </td>
                                            <td class="text-center">{{ $item->meta }} </td>
                                            <td>{{ $item->meses()->first()->mes }} </td>
                                            <td>{{ $item->año }} </td>
                                            <td class="text-center">{{ $item->valor }} </td>


                                            <td class="text-center">
                                                <a href="{{ URL::to('editarMeta') }}/{{ $item->idIndicador }}/{{ $item->idTablero }}/{{ $item->idresultado }}"
                                                    title="Editar Meta" class="btn btn-info btn-sm"><i
                                                        class="nc-icon nc-badge"></i> </a>
                                                <button type="button"class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#myModal" onclick="historial({{ $item->idresultado }})"
                                                    title="Historial"><i class="nc-icon nc-paper"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">DETALLE</h4>
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <!--<input type="text" id="idCompromiso2"name="idCompromiso2"/>-->
                    <table class="table" id="detalleTabla">

                    </table>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

        });

        function historial(id) {
            var idComp = id;
            var respuesta = $.ajax({
                url: "{{ URL::to('historial') }}",
                data: {
                    idComp: idComp
                },
                /* headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, */
                type: "GET",

                success: function(data) {
                    $('#myModal2').modal({
                        show: true
                    });
                    $('#detalleTabla').html(data);
                }
            });


        }
    </script>
@endpush
