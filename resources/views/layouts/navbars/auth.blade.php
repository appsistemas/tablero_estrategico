<div class="sidebar" data-color="black" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/bg/{{auth()->user()->img}}">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            {{ __(auth()->user()->name) }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                {{--  <a href="{{ route('page.index', 'dashboard') }}"> --}}
                <a href="{{ url('dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @if (auth()->user()->idrol == 1)
                <li class="{{ $elementActive == 'busqueda' ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" href="#busqueda" class="collapsed">
                        <i class="nc-icon nc-zoom-split" aria-hidden="true"></i>
                        <p>{{ __('Estrategicos') }}<b class="caret"></b></p>
                    </a>
                    <div class="collapse" id="busqueda">
                        <ul class="nav">
                            <li class="{{ $elementActive == 'busqueda' ? 'active' : '' }}">
                                <a href="{{ url('busqueda') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Seleccionar') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'listar' ? 'active' : '' }}">
                                <a href="{{ url('listarBusqueda') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Vizualizar') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
            <li class="{{ $elementActive == 'filosofia' || $elementActive == 'listar' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#inicio" class="collapsed">
                    <i class="fa fa-info" aria-hidden="true"></i>
                    <p>{{ __('Inicio') }}<b class="caret"></b></p>
                </a>
                <div class="collapse" id="inicio">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'filosofia' ? 'active' : '' }}">
                            <a href="{{ url('filosofia') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Filosofía') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'listar' ? 'active' : '' }}">
                            <a href="{{ url('listar') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __(' Compromisos ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @if (auth()->user()->idrol == 1)
                <li class="{{ $elementActive == 'listarUsuarios' || $elementActive == 'addUsuario' ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" href="#usuario">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>{{ __('Configuracion') }}<b class="caret"></b></p>
                    </a>
                    <div class="collapse" id="usuario">
                        <ul class="nav">
                            <li class="{{ $elementActive == 'addUsuario' ? 'active' : '' }}">
                                <a href="{{ url('addUsuario') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Nuevo Usuario') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'listarUsuarios' ? 'active' : '' }}">
                                <a href="{{ url('listarUsuario') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Lista de Usuarios') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadores' ? 'active' : '' }}">
                                <a href="{{ url('cofigTablero') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Apertura Tablero ') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'fecha_' ? 'active' : '' }}">
                                <a href="{{ url('cofigFecha') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Apertura Fecha ') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="{{ $elementActive == 'indicador' || $elementActive == 'indicador' ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" href="#indicadores">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <p>{{ __('Meta') }}<b class="caret"></b></p>
                    </a>
                    <div class="collapse" id="indicadores">
                        <ul class="nav">
                            <li class="{{ $elementActive == 'indicadores' ? 'active' : '' }}">
                                <a href="{{ url('configurar/1') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Equipo Humano') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadores' ? 'active' : '' }}">
                                <a href="{{ url('configurar/2') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Inovación') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadores' ? 'active' : '' }}">
                                <a href="{{ url('configurar/3') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Mejora') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadores' ? 'active' : '' }}">
                                <a href="{{ url('configurar/4') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Participación') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadores' ? 'active' : '' }}">
                                <a href="{{ url('configurar/5') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Sustentabilidad') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadores' ? 'active' : '' }}">
                                <a href="{{ url('configurar/6') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Rentabilidad') }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li
                    class="{{ $elementActive == 'indicadorEdit' || $elementActive == 'indicadoresEdit' ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" href="#indicadoresEdit">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <p>{{ __('Editar. Meta') }}<b class="caret"></b></p>
                    </a>
                    <div class="collapse" id="indicadoresEdit">
                        <ul class="nav">
                            <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                                <a href="{{ url('confEditable/1') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Equipo Humano') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                                <a href="{{ url('confEditable/2') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Inovación') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                                <a href="{{ url('confEditable/3') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Mejora') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                                <a href="{{ url('confEditable/4') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Participación') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                                <a href="{{ url('confEditable/5') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Sustentabilidad') }}</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                                <a href="{{ url('confEditable/6') }}">
                                    <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                    <span class="sidebar-normal">{{ __('Rentabilidad') }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            @endif

            <li class="{{ $elementActive == 'tableros' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#tableros">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <p>{{ __('Tablero') }}<b class="caret"></b></p>
                </a>
                <div class="collapse" id="tableros">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                            <a href="{{ url('tableros/1') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Equipo Humano') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                            <a href="{{ url('tableros/2') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Inovación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                            <a href="{{ url('tableros/3') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Mejora') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                            <a href="{{ url('tableros/4') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Participación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                            <a href="{{ url('tableros/5') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Sustentabilidad') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'indicadorEdi' ? 'active' : '' }}">
                            <a href="{{ url('tableros/6') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Rentabilidad') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="{{ $elementActive == 'respuesta' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#respuesta">
                    <i class="fa fa-industry" aria-hidden="true"></i>
                    <p>{{ __('Indicadores') }}<b class="caret"></b></p>
                </a>
                <div class="collapse" id="respuesta">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'respuestas' ? 'active' : '' }}">
                            <a href="{{ url('indicadores/1') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Equipo Humano') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'respuestas' ? 'active' : '' }}">
                            <a href="{{ url('indicadores/2') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Inovación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'respuestas' ? 'active' : '' }}">
                            <a href="{{ url('indicadores/3') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Mejora') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'respuestas' ? 'active' : '' }}">
                            <a href="{{ url('indicadores/4') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Participación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'respuestas' ? 'active' : '' }}">
                            <a href="{{ url('indicadores/5') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Sustentabilidad') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'respuestas' ? 'active' : '' }}">
                            <a href="{{ url('indicadores/6') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Rentabilidad') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="{{ $elementActive == 'acciones' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#correctivas">
                    <i class="fa fa-at" aria-hidden="true"></i>
                    <p>{{ __('Acciones Correctivas') }}<b class="caret"></b></p>
                </a>
                <div class="collapse" id="correctivas">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'accionesA' ? 'active' : '' }}">
                            <a href="{{ url('correctivas/1') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Equipo Humano') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'accionesA' ? 'active' : '' }}">
                            <a href="{{ url('correctivas/2') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Inovación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'accionesA' ? 'active' : '' }}">
                            <a href="{{ url('correctivas/3') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Mejora') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'accionesA' ? 'active' : '' }}">
                            <a href="{{ url('correctivas/4') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Participación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'accionesA' ? 'active' : '' }}">
                            <a href="{{ url('correctivas/5') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Sustentabilidad') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'accionesA' ? 'active' : '' }}">
                            <a href="{{ url('correctivas/6') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Rentabilidad') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="{{ $elementActive == 'grafica' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#grafica">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <p>{{ __('Gráfica Indicadores') }}<b class="caret"></b></p>
                </a>
                <div class="collapse" id="grafica">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'graficaA' ? 'active' : '' }}">
                            <a href="{{ url('indicadoresMeses/1') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Equipo Humano') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'graficaA' ? 'active' : '' }}">
                            <a href="{{ url('indicadoresMeses/2') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Inovación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'graficaA' ? 'active' : '' }}">
                            <a href="{{ url('indicadoresMeses/3') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Mejora') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'graficaA' ? 'active' : '' }}">
                            <a href="{{ url('indicadoresMeses/4') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Participación') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'graficaA' ? 'active' : '' }}">
                            <a href="{{ url('indicadoresMeses/5') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Sustentabilidad') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'graficaA' ? 'active' : '' }}">
                            <a href="{{ url('indicadoresMeses/6') }}">
                                <span class="sidebar-mini-icon">{{ __('o') }}</span>
                                <span class="sidebar-normal">{{ __('Rentabilidad') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="{{ $elementActive == 'general' || $elementActive == 'profile' ? 'active' : '' }}">
                <a href="{{ url('desempe_o/1') }}">
                    <i class="fa fa-line-chart"></i>
                    <p>{{ __('Desempeño General') }}<b class="caret"></b></p>
                </a>

            </li>
        </ul>
    </div>
</div>
