@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'listar',
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
                                    <a class="navbar-brand" href="">COMPROMISOS</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        <a href="{{ url('add') }}" class="btn btn-warning">Añadir</a>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">

                        <div class=""> {{-- table-responsive --}}
                            <table class="table" style="font-size: 10px" id="tableCompromiso">
                                <thead>
                                    <tr>
                                        <th style="color: #51cbce; font-size: 12px;"> FECHA DE REUNIÓN </th>
                                        <th style="color: #51cbce; font-size: 12px;width:20%;"> QUE? </th>
                                        <th style="color: #51cbce; font-size: 12px;"> QUIEN? </th>
                                        <th style="color: #51cbce; font-size: 12px;"> CUANDO </th>
                                        <th style="color: #51cbce; font-size: 12px;"> AVANCE </th>
                                        <th style="color: #51cbce; font-size: 12px; width:20%;"> COMENTARIO </th>
                                        <th style="color: #51cbce; font-size: 12px;"> ESTATUS </th>
                                        <th style="color: #51cbce; font-size: 12px;" class="text-center"> ACCIONES </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="">{{ $item->fecha }}</td>
                                            <td class="">{{ $item->que }}</td>
                                            <td class="">{{ $item->quien }}</td>
                                            <td class="">{{ $item->cuando }}</td>
                                            <td class="">{{ $item->avance }}</td>
                                            <td class="">{{ $item->comentario }}</td>
                                            <?php if ($item->estatus == 'FINALIZADO') { ?>
                                            <td bgcolor="#51cbce;"><?php echo $item->estatus; ?></td>
                                            <?php } else if ($item->estatus == 'PROCESO') { ?>
                                            <td bgcolor="yellow"><?php echo $item->estatus; ?></td>
                                            <?php } else if ($item->estatus == 'PENDIENTE') { ?>
                                            <td bgcolor="red"><?php echo $item->estatus; ?></td>
                                            <?php } else if ($item->estatus == '') { ?>
                                            <td></td>
                                            <?php } ?>
                                            <td class="text-center">
                                                <a href="{{ URL::to('editar') }}/{{ $item->id_compromiso }}" title="Editar"
                                                    class="btn btn-info btn-sm"><i class="nc-icon nc-align-center"></i></a>

                                                <button type="button"class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#myModal"
                                                    onclick="idCompromiso({{ $item->id_compromiso }})" title="Cargar"><i
                                                        class="nc-icon nc-cloud-upload-94"></i></button>

                                                <button type="button"class="btn btn-danger btn-sm"
                                                    onclick="idCompromiso2({{ $item->id_compromiso }})"
                                                    title="Descargar"><i class="nc-icon nc-cloud-download-93"
                                                        aria-hidden="true"></i></button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">SUBIR DOCUMENTO</h4>
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                </div>

                <!-- Modal body -->
                <form enctype="multipart/form-data" action="{{ url('addDocumento') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="idCompromiso"name="idCompromiso" />
                        <!--<input type="hidden" name="MAX_FILE_SIZE" value="512000" />-->
                        <p><input name="subir_archivo" type="file" required></p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">DESCARGAR DOCUMENTO</h4>
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
        new DataTable('#tableCompromiso');
        $(document).ready(function() {

        });

        function idCompromiso(id) {
            var idComp = id;
            $("#idCompromiso").val(idComp);
        }

        function idCompromiso2(id) {
            var idComp = id;


            var respuesta = $.ajax({
                url: "{{ URL::to('descargar') }}",
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
