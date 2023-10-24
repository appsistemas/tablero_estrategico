@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'busqueda',
])

<style>
    .select2-container {
        width: 1000px !important;
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle;
    }
</style>
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">SELECCIONE LOS INDICADORES:</h4>
                        <form action="saveBusqueda" method="post">
                            @csrf
                            <div class="card card-nav-tabs card-plain">
                                <div class="card-header card-header-danger">
                                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#equipo" data-toggle="tab">Equipo
                                                        Humano</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#innovacion" data-toggle="tab">Innovación</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#mejora" data-toggle="tab">Mejora</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#participacion"
                                                        data-toggle="tab">Participación</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#sustentabilidad"
                                                        data-toggle="tab">Sustentabilidad</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#rentabilidad"
                                                        data-toggle="tab">Rentabilidad</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body ">


                                    <div class="tab-content text-center">
                                        <br>
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-1">
                                                <label for="">NOMBRE:</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text"id="nombre" name="nombre" class="form-control"
                                                    placeholder="Ingrese el nombre de la consulta">
                                            </div>

                                        </div>
                                        <div class="tab-pane active" id="equipo">
                                            <br>
                                            {{ Form::select('equipoHumanoSelec', $equipoHumano, null, ['id' => 'equipoHumanoSelec', 'name' => 'equipoHumano[]', 'class' => 'form-control', 'data-required' => 'true', 'multiple' => 'multiple']) }}
                                        </div>
                                        <div class="tab-pane " id="innovacion">
                                            <br>
                                            {{ Form::select('innovacionSelec', $innovacion, null, ['id' => 'innovacionSelec', 'name' => 'innovacion[]', 'class' => 'form-control', 'data-required' => 'true', 'multiple' => 'multiple']) }}
                                        </div>
                                        <div class="tab-pane" id="mejora">
                                            <br>
                                            {{ Form::select('mejoraSelec', $mejora, null, ['id' => 'mejoraSelec', 'name' => 'mejora[]', 'class' => 'form-control', 'data-required' => 'true', 'multiple' => 'multiple']) }}
                                        </div>
                                        <div class="tab-pane" id="participacion">
                                            <br>
                                            {{ Form::select('participacionSelec', $participacion, null, ['id' => 'participacionSelec', 'name' => 'participacion[]', 'class' => 'form-control', 'data-required' => 'true', 'multiple' => 'multiple']) }}
                                        </div>
                                        <div class="tab-pane" id="sustentabilidad">
                                            <br>
                                            {{ Form::select('sustentabilidadSelec', $rentabilidad, null, ['id' => 'sustentabilidadSelec', 'name' => 'sustentabilidad[]', 'class' => 'form-control', 'data-required' => 'true', 'multiple' => 'multiple']) }}
                                        </div>
                                        <div class="tab-pane" id="rentabilidad">
                                            <br>
                                            {{ Form::select('rentabilidadSelec', $sustentabilidad, null, ['id' => 'rentabilidadSelec', 'name' => 'rentabilidad[]', 'class' => 'form-control', 'data-required' => 'true', 'multiple' => 'multiple']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-buscar btn-lg btn-block">BUSCAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            /*     $('#example-post').multiselect({
                    includeSelectAllOption: true,
                    enableFiltering: true,
                    nonSelectedText: 'No se encuentra registros seleccionados',
                    selectAllText: 'Seleccione todos',
                    filterPlaceholder: 'Busqueda'
                }); */

            $('#equipoHumanoSelec').select2({
                placeholder: 'SELECCIONE',
                allowClear: true
            });
            $('#innovacionSelec').select2({
                placeholder: 'SELECCIONE',
                allowClear: true
            });
            $('#mejoraSelec').select2({
                placeholder: 'SELECCIONE',
                allowClear: true
            });
            $('#participacionSelec').select2({
                placeholder: 'SELECCIONE',
                allowClear: true
            });
            $('#sustentabilidadSelec').select2({
                placeholder: 'SELECCIONE',
                allowClear: true
            });
            $('#rentabilidadSelec').select2({
                placeholder: 'SELECCIONE',
                allowClear: true
            });

        });
    </script>
@endpush
