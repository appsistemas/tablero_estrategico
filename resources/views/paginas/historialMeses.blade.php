@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'respuesta',
])
<style>
    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #66615b !important;
    }
</style>

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
                                        <a href="{{ url('tableros') }}/{{ $tipo }}"
                                            class="btn btn-warning">Regresar</a>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-1">
                                <ul class="nav nav-pills nav-pills-primary flex-column">
                                    <li class="nav-item"><a class="nav-link active " href="#tab1"
                                            data-toggle="tab">2023</a></li>
                                    {{--           <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">2022</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">2021</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="col-md-11">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class=""> {{-- table-responsive --}}
                                            <table class="table text-white" style="font-size: 10px">
                                                <thead>
                                                    <tr>
                                                        <th style="color: #9a0202; font-size: 12px; width:5%;"> ID </th>
                                                        <th style="color: #9a0202; font-size: 12px;width:20%;"> OBJETIVO
                                                        </th>
                                                        <th style="color: #9a0202; font-size: 12px; width:20%;"> INDICADOR
                                                        </th>
                                                        <th style="color: #9a0202; font-size: 12px; width:5%;"> MES </th>
                                                        <th style="color: #9a0202; font-size: 12px; width:10%;"
                                                            class="text-center"> METAS
                                                        </th>
                                                        <th style="color: #9a0202; font-size: 12px; width:5%;"> VALOR </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td class="">{{ $item->codigo }}</td>
                                                            <td class="">{{ $item->objetivo }}</td>
                                                            <td>{{ $item->indicador }} </td>
                                                            <td>{{ $item->meses()->first()->mes }} </td>
                                                            <td class="text-center">{{ $item->meta }} </td>
                                                            <td>{{ $item->valor }} </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        Efficiently unleash cross-media information without cross-media value. Quickly
                                        maximize timely deliverables for real-time schemas.
                                        <br><br>Dramatically maintain clicks-and-mortar solutions without functional
                                        solutions.
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        Completely synergize resource taxing relationships via premier niche markets.
                                        Professionally cultivate one-to-one customer service with robust ideas.
                                        <br><br>Dynamically innovate resource-leveling customer service for state of the art
                                        customer service.
                                    </div>
                                </div>
                            </div>
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
