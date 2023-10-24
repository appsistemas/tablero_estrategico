@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'listarUsuarios',
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
                                    <a class="navbar-brand" href="">Nivel de competencia del personal - DIRECCIÓN
                                        MANUFACTURA</a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <form class="form-inline ml-auto">
                                        <a href="{{ url('crearMetaFutura') }}/{{ $id }}/{{ $tipo }}"
                                            class="btn btn-warning">Añadir</a>
                                    </form>
                                </div>
                                <form class="form-inline ml-auto">
                                    <a href="{{ url('tableros') }}/{{ $tipo }}" class="btn btn-default">Regresar</a>
                                </form>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">

                        <div class=""> {{-- table-responsive --}}
                            <table class="table" style="font-size: 10px">
                                <thead>
                                    <tr>
                                        <th style="color: #9a0202; font-size: 12px;"> ENERO</th>
                                        <th style="color: #9a0202; font-size: 12px;"> FEBRERO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> MARZO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> ABRIL </th>
                                        <th style="color: #9a0202; font-size: 12px;"> MAYO</th>
                                        <th style="color: #9a0202; font-size: 12px;"> JUNIO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> JULIO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> AGOSTO </th>
                                        <th style="color: #9a0202; font-size: 12px;"> SEPTIEMBRE </th>
                                        <th style="color: #9a0202; font-size: 12px;"> OCTUBRE </th>
                                        <th style="color: #9a0202; font-size: 12px;"> NOVIEMBRE </th>
                                        <th style="color: #9a0202; font-size: 12px;"> DICIEMBRE </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="">{{ $item->enero }}</td>
                                            <td class="">{{ $item->febrero }}</td>
                                            <td class="">{{ $item->marzo }}</td>
                                            <td class="">{{ $item->abril }}</td>
                                            <td class="">{{ $item->mayo }}</td>
                                            <td class="">{{ $item->junio }}</td>
                                            <td class="">{{ $item->julio }}</td>
                                            <td class="">{{ $item->agosto }}</td>
                                            <td class="">{{ $item->septiembre }}</td>
                                            <td class="">{{ $item->octubre }}</td>
                                            <td class="">{{ $item->noviembre }}</td>
                                            <td class="">{{ $item->diciembre }}</td>

                                            <td class="text-center">
                                                <a href="{{ URL::to('editarMetaFutura') }}/{{ $item->id_meta }}/{{ $item->id_indicador }}/{{ $tipo }}"
                                                    title="Editar" class="btn btn-info btn-sm"><i
                                                        class="nc-icon nc-align-center"></i></a>

                                                <a href="javascript:void(0);"onclick="$('#frmDel{{ $item->id_meta }}').submit();"
                                                    class="btn btn-danger btn-sm" title="Eliminar"><i
                                                        class="nc-icon nc-simple-remove"></i></a>
                                                {{ Form::open(['url' => 'eliminarMetaFutura' . '/' . $item->id_meta . '/' . $item->id_indicador . '/' . $tipo, 'class' => 'pull-right', 'id' => 'frmDel' . $item->id_meta]) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::close() }}
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
