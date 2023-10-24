@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'indicador',
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
                                        {{-- <a href="{{ url('add') }}" class="btn btn-warning">Todo</a> --}}
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
                                        <th style="color: #9a0202; font-size: 12px;"> FORMULA</th>
                                        <th style="color: #9a0202; font-size: 12px; width:10%;"> FRECUENCIA </th>
                                        <th style="color: #9a0202; font-size: 12px;"> UNIDAD </th>
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
                                        <td><strong>Suma ponderada de las estrategias</strong></td>
                                        <td><strong>Mensual</strong></td>
                                        <td><strong>%</strong></td>
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
                                            <td>{{ $item->formula }} </td>
                                            <td>{{ $item->frecuencia }} </td>
                                            <td>{{ $item->unidad }} </td>


                                            <td class="text-center">
                                                <a href="{{ URL::to('crearMeta') }}/{{ $item->idIndicador }}/{{ $item->idTablero }}"
                                                    title="Crear Meta" class="btn btn-info btn-sm"><i
                                                        class="nc-icon nc-paper"></i> Crear Meta</a>
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
