@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'grafica',
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
                                        {{-- <a href="{{ url('promedio') }}/{{ $tipo }}"
                                            class="btn btn-danger">Promedio</a>
                                        <a href="{{ url('meses') }}/{{ $tipo }}" class="btn btn-default">Meses</a> --}}
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
                                        <th style="color: #9a0202; font-size: 12px;width:5%;" class="text-center"> ID </th>
                                        <th style="color: #9a0202; font-size: 12px;width:30%;" class="text-center"> OBJETIVO
                                        </th>
                                        <th style="color: #9a0202; font-size: 12px;width:30%;" class="text-center">
                                            INDICADOR
                                        </th>
                                        <th style="color: #9a0202; font-size: 12px;width:40%;" class="text-center"> ACCION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="">{{ $item->codigo }}</td>
                                            <td class="">{{ $item->objetivo }}</td>
                                            <td>{{ $item->indicador }} </td>
                                            <td class="text-center">
                                                <a href="{{ URL::to('indicadorXmes') }}/{{ $tipo }}/{{ $item->idIndicador }}/{{ 2023 }}"
                                                    title="2023" class="btn btn-default btn-sm">2023</a>
                                                <a href="{{ URL::to('todosXmes') }}/{{ $tipo }}/{{ $item->idIndicador }}"
                                                    title="Todos" class="btn btn-default btn-sm">Todos</a>
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
