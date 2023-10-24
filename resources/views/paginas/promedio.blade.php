@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tableros',
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
                                        <a href="{{ url('tableros') }}/{{ $tipo }}"
                                            class="btn btn-warning">Regresar</a>
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
                                        <th style="color: #9a0202; font-size: 12px;width:5%;"> ID </th>
                                        <th style="color: #9a0202; font-size: 12px;width:20%;"> OBJETIVO </th>
                                        <th style="color: #9a0202; font-size: 12px;width:5%;"> TIPO</th>
                                        <th style="color: #9a0202; font-size: 12px;width:15%;"> INDICADOR </th>
                                        <th style="color: #9a0202; font-size: 12px;width:15%;">FORMULA</th>
                                        <th style="color: #9a0202; font-size: 12px;width:5%;">FRECUENCIA</th>
                                        <th style="color: #9a0202; font-size: 12px; width:5%;">UNIDAD</th>
                                        <th style="color: #9a0202; font-size: 12px; width:5%;" class="text-center"> 2023
                                        </th>
                                        {{-- <th style="color: #9a0202; font-size: 12px; width:5%;"> 2024 </th> --}}

                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="">{{ $item->codigo }}</td>
                                            <td class="">{{ $item->objetivo }}</td>
                                            <td>{{ $item->tipo }} </td>
                                            <td>{{ $item->indicador }} </td>
                                            <td>{{ $item->formula }} </td>
                                            <td class="text-center">{{ $item->frecuencia }} </td>
                                            <td class="text-center">{{ $item->unidad }} </td>
                                            <td class="text-center">{{ $item->_20_17 }} </td>
                                            {{--   <td class="text-center">{{ $item->_20_18 }} </td> --}}
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
