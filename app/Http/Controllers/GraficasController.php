<?php

namespace App\Http\Controllers;

use App\Models\Indicadores;
use App\Models\Busqueda;
use App\Models\ArchivoCompromiso;
use App\Models\Meses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Url;

class GraficasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display all the static pages when authenticated
     *
     *
     * @return \Illuminate\View\View
     */
    public function busqueda()
    {
        $busqueda = Busqueda::where('estado', '=', '1')->first();
        $array = explode(",",  $busqueda->todos);
        return $array;
    }
    public function meses($tipo)
    {

        $enero[] = 0;
        $anio = date("Y");
        $dataEnero = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 1)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($dataEnero as $value) {

            if ($value->valor == '') {
                $enero[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $enero[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $enero[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $enero[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $enero[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $enero[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $enero[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $enero[] = '0';
            }
        }

        $febrero[] = 0;
        $datafebrero = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 2)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($datafebrero as $value) {

            if ($value->valor == '') {
                $febrero[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $febrero[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $febrero[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $febrero[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $febrero[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $febrero[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $febrero[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $febrero[] = '0';
            }
        }

        $marzo[] = 0;
        $datamarzo = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 3)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($datamarzo as $value) {

            if ($value->valor == '') {
                $marzo[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $marzo[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $marzo[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $marzo[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $marzo[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $marzo[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $marzo[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $marzo[] = '0';
            }
        }

        $abril[] = 0;
        $dataabril = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 4)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($dataabril as $value) {

            if ($value->valor == '') {
                $abril[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $abril[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $abril[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $abril[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $abril[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $abril[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $abril[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $abril[] = '0';
            }
        }

        $mayo[] = 0;
        $datamayo = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 5)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($datamayo as $value) {

            if ($value->valor == '') {
                $mayo[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $mayo[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $mayo[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $mayo[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $mayo[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $mayo[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $mayo[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $mayo[] = '0';
            }
        }

        $junio[] = 0;
        $datajunio = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 6)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($datajunio as $value) {

            if ($value->valor == '') {
                $junio[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $junio[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $junio[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $junio[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $junio[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $junio[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $junio[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $junio[] = '0';
            }
        }

        $julio[] = 0;
        $datajulio = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 7)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($datajulio as $value) {

            if ($value->valor == '') {
                $julio[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $julio[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $julio[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $julio[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $julio[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $julio[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $julio[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $julio[] = '0';
            }
        }

        $agosto[] = 0;
        $dataagosto = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 8)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($dataagosto as $value) {

            if ($value->valor == '') {
                $agosto[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $agosto[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $agosto[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $agosto[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $agosto[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $agosto[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $agosto[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $agosto[] = '0';
            }
        }

        $septiembre[] = 0;
        $dataseptiembre = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 9)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($dataseptiembre as $value) {

            if ($value->valor == '') {
                $septiembre[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $septiembre[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $septiembre[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $septiembre[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $septiembre[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $septiembre[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $septiembre[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $septiembre[] = '0';
            }
        }

        $octubre[] = 0;
        $dataoctubre = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 10)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($dataoctubre as $value) {

            if ($value->valor == '') {
                $octubre[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $octubre[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $octubre[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $octubre[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $octubre[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $octubre[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $octubre[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $octubre[] = '0';
            }
        }

        $noviembre[] = 0;
        $datanoviembre = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 11)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($datanoviembre as $value) {

            if ($value->valor == '') {
                $noviembre[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $noviembre[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $noviembre[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $noviembre[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $noviembre[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $noviembre[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $noviembre[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $noviembre[] = '0';
            }
        }


        $diciembre[] = 0;
        $datadiciembre = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', 12)
            ->where('indicadores.idTablero', '=', $tipo)
            ->where('resultado.año', '=', $anio)
            ->where('resultado.estado', '=', 0)
            ->get();

        foreach ($datadiciembre as $value) {

            if ($value->valor == '') {
                $diciembre[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $diciembre[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $diciembre[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $diciembre[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $diciembre[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $diciembre[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $diciembre[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $diciembre[] = '0';
            }
        }
        return View('paginas.meses', [
            'enero' => array_sum($enero),
            'febrero' => array_sum($febrero),
            'marzo' => array_sum($marzo),
            'abril' => array_sum($abril),
            'mayo' => array_sum($mayo),
            'junio' => array_sum($junio),
            'julio' => array_sum($julio),
            'agosto' => array_sum($agosto),
            'septiembre' => array_sum($septiembre),
            'octubre' => array_sum($octubre),
            'noviembre' => array_sum($noviembre),
            'diciembre' => array_sum($diciembre),
            'tipo' => $tipo,

        ]);
    }
    public function mes($mes, $tipo)
    {
        $array = $this->busqueda();
        $anio = date("Y");
        $data = indicadores::where('idTablero', '=', $tipo)
            ->join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.estado', '=', '0')
            ->where('idMes', '=', $mes)
            ->where('año', '=', $anio)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();


        $indicador = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        $meses = Meses::where('idMes', '=', $mes)
            ->get();
        return View('paginas.mes', [
            'data' => $data,
            'indicador' => $indicador->nombreTablero,
            'mes' => $meses[0]->mes,
            'tipo' => $tipo


        ]);
    }

    public function indicadoresMeses($tipo)
    {
        $array = $this->busqueda();
        $indicador = DB::table('indicadores')
            ->where('idTablero', '=', $tipo)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        $tablero = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        return View('paginas.indicadoresMeses', [
            'data' => $indicador,
            'indicador' => $tablero->nombreTablero,
            'tipo' => $tipo
        ]);
    }

    public function indicadorXmes($tipo, $id, $anio)
    {
        $indicador = DB::table('indicadores')
            ->where('idTablero', '=', $tipo)
            ->where('idIndicador', '=', $id)
            ->first();

        $tablero = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();


        $resultado = DB::table('resultado')
            ->where('idIndicador', '=', $id)
            ->where('año', '=', $anio)
            ->get();


        $meses[] = 0;
        $cont = 0;
        foreach ($resultado as $item) {
            $meses[$item->idMes] =  $item->valor;
        }

        return View('paginas.indicadorXMes', [
            'objetivo' => $indicador->indicador,
            'indicador' => $tablero->nombreTablero,
            'tipo' => $tipo,
            'meses' => $meses
        ]);
    }

    public function todosXmes($tipo, $id)
    {
        $indicador = DB::table('indicadores')
            ->where('idTablero', '=', $tipo)
            ->where('idIndicador', '=', $id)
            ->first();

        $tablero = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();


        $_2023 = DB::table('resultado')
            ->where('idIndicador', '=', $id)
            ->where('año', '=', '2023')
            ->get();
        $_2024 = DB::table('resultado')
            ->where('idIndicador', '=', $id)
            ->where('año', '=', '2024')
            ->get();


        $r2023[] = 0;
        $r2024[] = 0;
        $cont = 0;
        $cont2 = 0;
        foreach ($_2023 as $item) {
            $cont++;
            $r2023[$item->idMes] =  $item->valor;
        }
        foreach ($_2024 as $item) {
            $cont2++;
            $r2024[$item->idMes] =  $item->valor;
        }
        return View('paginas.todosXMes', [
            'objetivo' => $indicador->indicador,
            'indicador' => $tablero->nombreTablero,
            'tipo' => $tipo,
            'r2023' => $r2023,
            'r2024' => $r2024,
        ]);
    }

    public function desempe_o($tipo)
    {
        $meses = Meses::all();
        $anio = 2023;

        $data[] = 0;
        $array1[] = 0;
        $tablero1[] = 0;

        $data2[] = 0;
        $array2[] = 0;
        $tablero2[] = 0;

        $data3[] = 0;
        $array3[] = 0;
        $tablero3[] = 0;

        $data4[] = 0;
        $array4[] = 0;
        $tablero4[] = 0;

        $data5[] = 0;
        $array5[] = 0;
        $tablero5[] = 0;

        $data6[] = 0;
        $array6[] = 0;
        $tablero6[] = 0;
        $array = $this->busqueda();
        foreach ($meses as $item) {

            $equipoHumano = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
                ->where('resultado.idMes', '=', $item->idMes)
                ->where('indicadores.idTablero', '=', 1)
                ->where('resultado.año', '=', $anio)
                ->whereIn('indicadores.idIndicador', $array)
                ->get();

            foreach ($equipoHumano as $value) {

                if ($value->valor == '') {
                    $data[] = $value->valor;
                } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                    $data[] = $value->peso;
                } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                    $data[] = '0';
                } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                    $data[] = $value->peso;
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                    $data[] = round($value->peso * ($value->valor / $value->meta), 2);
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                    $data[] = '0';
                } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                    $data[] = $value->peso;
                } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                    $data[] = '0';
                }
            }
            $array1[$item->idMes] = array_sum($data);
            $tablero1[$item->idMes] = $array1[$item->idMes] - $array1[$item->idMes - 1];

            $inovacion = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
                ->where('resultado.idMes', '=', $item->idMes)
                ->where('indicadores.idTablero', '=', 2)
                ->where('resultado.año', '=', $anio)
                ->whereIn('indicadores.idIndicador', $array)
                ->get();

            foreach ($inovacion as $value) {

                if ($value->valor == '') {
                    $data2[] = $value->valor;
                } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                    $data2[] = $value->peso;
                } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                    $data2[] = '0';
                } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                    $data2[] = $value->peso;
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                    $data2[] = round($value->peso * ($value->valor / $value->meta), 2);
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                    $data2[] = '0';
                } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                    $data2[] = $value->peso;
                } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                    $data2[] = '0';
                }
            }
            $array2[$item->idMes] = array_sum($data2);
            $tablero2[$item->idMes] = $array2[$item->idMes] - $array2[$item->idMes - 1];

            $mejora = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
                ->where('resultado.idMes', '=', $item->idMes)
                ->where('indicadores.idTablero', '=', 3)
                ->where('resultado.año', '=', $anio)
                ->whereIn('indicadores.idIndicador', $array)
                ->get();

            foreach ($mejora as $value) {

                if ($value->valor == '') {
                    $data3[] = $value->valor;
                } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                    $data3[] = $value->peso;
                } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                    $data3[] = '0';
                } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                    $data3[] = $value->peso;
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                    $data3[] = round($value->peso * ($value->valor / $value->meta), 2);
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                    $data3[] = '0';
                } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                    $data3[] = $value->peso;
                } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                    $data3[] = '0';
                }
            }
            $array3[$item->idMes] = array_sum($data3);
            $tablero3[$item->idMes] = $array3[$item->idMes] - $array3[$item->idMes - 1];

            $participacion = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
                ->where('resultado.idMes', '=', $item->idMes)
                ->where('indicadores.idTablero', '=', 4)
                ->where('resultado.año', '=', $anio)
                ->whereIn('indicadores.idIndicador', $array)
                ->get();

            foreach ($participacion as $value) {

                if ($value->valor == '') {
                    $data4[] = $value->valor;
                } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                    $data4[] = $value->peso;
                } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                    $data4[] = '0';
                } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                    $data4[] = $value->peso;
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                    $data4[] = round($value->peso * ($value->valor / $value->meta), 2);
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                    $data4[] = '0';
                } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                    $data4[] = $value->peso;
                } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                    $data4[] = '0';
                }
            }
            $array4[$item->idMes] = array_sum($data4);
            $tablero4[$item->idMes] = $array4[$item->idMes] - $array4[$item->idMes - 1];

            $sustentabilidad = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
                ->where('resultado.idMes', '=', $item->idMes)
                ->where('indicadores.idTablero', '=', 5)
                ->where('resultado.año', '=', $anio)
                ->whereIn('indicadores.idIndicador', $array)
                ->get();

            foreach ($sustentabilidad as $value) {

                if ($value->valor == '') {
                    $data5[] = $value->valor;
                } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                    $data5[] = $value->peso;
                } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                    $data5[] = '0';
                } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                    $data5[] = $value->peso;
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                    $data5[] = round($value->peso * ($value->valor / $value->meta), 2);
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                    $data5[] = '0';
                } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                    $data5[] = $value->peso;
                } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                    $data5[] = '0';
                }
            }
            $array5[$item->idMes] = array_sum($data5);
            $tablero5[$item->idMes] = $array5[$item->idMes] - $array5[$item->idMes - 1];

            $rentabilidad = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
                ->where('resultado.idMes', '=', $item->idMes)
                ->where('indicadores.idTablero', '=', 6)
                ->where('resultado.año', '=', $anio)
                ->whereIn('indicadores.idIndicador', $array)
                ->get();

            foreach ($rentabilidad as $value) {

                if ($value->valor == '') {
                    $data6[] = $value->valor;
                } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                    $data6[] = $value->peso;
                } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                    $data6[] = '0';
                } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                    $data6[] = $value->peso;
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                    $data6[] = round($value->peso * ($value->valor / $value->meta), 2);
                } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                    $data6[] = '0';
                } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                    $data6[] = $value->peso;
                } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                    $data6[] = '0';
                }
            }
            $array6[$item->idMes] = array_sum($data6);
            $tablero6[$item->idMes] = $array6[$item->idMes] - $array6[$item->idMes - 1];
        }

        return View('paginas.desempe_o', [

            'tipo' => $tipo,
            'tablero1' => $tablero1,
            'tablero2' => $tablero2,
            'tablero3' => $tablero3,
            'tablero4' => $tablero4,
            'tablero5' => $tablero5,
            'tablero6' => $tablero6,

        ]);
    }
}
