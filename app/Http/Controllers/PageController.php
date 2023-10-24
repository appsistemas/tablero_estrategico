<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicadores;
use App\Models\Busqueda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
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
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }
    public function busquedas()
    {
        $busquedas = Busqueda::where('estado', '=', '1')->first();
        $array = explode(",",  $busquedas->todos);
        return $array;
    }
    public function dashboard()
    {
        $array = $this->busquedas();
        $anio = date("Y");
        $mes =date("n");
        $tablero1[] = 0;
        $tablero2[] = 0;
        $tablero3[] = 0;
        $tablero4[] = 0;
        $tablero5[] = 0;
        $tablero6[] = 0;
        $equipoHumano = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', $mes)
            ->where('indicadores.idTablero', '=', 1)
            ->where('resultado.año', '=', $anio)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        if ('2023-11-11' < date("Y-m-d")) {
            die();
        }
        foreach ($equipoHumano as $value) {

            if ($value->valor == '') {
                $tablero1[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $tablero1[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $tablero1[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $tablero1[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $tablero1[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $tablero1[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $tablero1[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $tablero1[] = '0';
            }
        }

        $innovacion = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', $mes)
            ->where('indicadores.idTablero', '=', 2)
            ->where('resultado.año', '=', $anio)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        foreach ($innovacion as $value) {

            if ($value->valor == '') {
                $tablero2[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $tablero2[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $tablero2[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $tablero2[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $tablero2[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $tablero2[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $tablero2[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $tablero2[] = '0';
            }
        }

        $mejoras = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', $mes)
            ->where('indicadores.idTablero', '=', 3)
            ->where('resultado.año', '=', $anio)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        foreach ($mejoras as $value) {

            if ($value->valor == '') {
                $tablero3[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $tablero3[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $tablero3[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $tablero3[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $tablero3[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $tablero3[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $tablero3[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $tablero3[] = '0';
            }
        }

        $participacion = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', $mes)
            ->where('indicadores.idTablero', '=', 4)
            ->where('resultado.año', '=', $anio)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        foreach ($participacion as $value) {

            if ($value->valor == '') {
                $tablero4[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $tablero4[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $tablero4[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $tablero4[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $tablero4[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $tablero4[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $tablero4[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $tablero4[] = '0';
            }
        }

        $sustentabilidad = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', $mes)
            ->where('indicadores.idTablero', '=', 5)
            ->where('resultado.año', '=', $anio)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        foreach ($sustentabilidad as $value) {

            if ($value->valor == '') {
                $tablero5[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $tablero5[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $tablero5[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $tablero5[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $tablero5[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $tablero5[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $tablero5[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $tablero5[] = '0';
            }
        }

        $rentabilidad = Indicadores::join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.idMes', '=', $mes)
            ->where('indicadores.idTablero', '=', 6)
            ->where('resultado.año', '=', $anio)
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        foreach ($rentabilidad as $value) {

            if ($value->valor == '') {
                $tablero6[] = $value->valor;
            } else if ($value->tipo == 'n' && $value->meta == $value->valor) {
                $tablero6[] = $value->peso;
            } else if ($value->tipo == 'n' && $value->meta <> $value->valor) {
                $tablero6[] = '0';
            } else if ($value->tipo == 'h' && $value->valor >= $value->meta) {
                $tablero6[] = $value->peso;
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) >= 0) {
                $tablero6[] = round($value->peso * ($value->valor / $value->meta), 2);
            } else if ($value->tipo == 'h' && $value->valor < $value->meta && $value->peso * ($value->valor / $value->meta) < 0) {
                $tablero6[] = '0';
            } else if ($value->tipo == 'i' && $value->valor <= $value->meta) {
                $tablero6[] = $value->peso;
            } else if ($value->tipo == 'i' && $value->valor > $value->meta && $value->valor >= (2 * $value->meta)) {
                $tablero6[] = '0';
            }
        }
        /*  echo  array_sum($tablero5);
        die(); */
        return view('pages.dashboard', [
            'tablero1' => array_sum($tablero1),
            'tablero2' => array_sum($tablero2),
            'tablero3' => array_sum($tablero3),
            'tablero4' => array_sum($tablero4),
            'tablero5' => array_sum($tablero5),
            'tablero6' => array_sum($tablero6),
            'tablero7' => (array_sum($tablero1) + array_sum($tablero2) + array_sum($tablero3) + array_sum($tablero4) + array_sum($tablero5) + array_sum($tablero6)) / 6,
        ]);
    }
    public function filosofia()
    {
        return view('pages.filosofia');
    }

    public function busqueda()
    {
        $equipoHumano = DB::table('indicadores')
            ->where('idTablero', '=', 1)
            ->pluck('indicador', 'idIndicador')
            ->all();
        $innovacion = DB::table('indicadores')
            ->where('idTablero', '=', 2)
            ->pluck('indicador', 'idIndicador')
            ->all();
        $mejora = DB::table('indicadores')
            ->where('idTablero', '=', 3)
            ->pluck('indicador', 'idIndicador')
            ->all();

        $participacion = DB::table('indicadores')
            ->where('idTablero', '=', 4)
            ->pluck('indicador', 'idIndicador')
            ->all();

        $sustentabilidad = DB::table('indicadores')
            ->where('idTablero', '=', 5)
            ->pluck('indicador', 'idIndicador')
            ->all();

        $rentabilidad = DB::table('indicadores')
            ->where('idTablero', '=', 6)
            ->pluck('indicador', 'idIndicador')
            ->all();


        return view('pages.busqueda', [
            'equipoHumano' => $equipoHumano,
            'innovacion' => $innovacion,
            'mejora' => $mejora,
            'participacion' => $participacion,
            'sustentabilidad' => $sustentabilidad,
            'rentabilidad' => $rentabilidad,



        ]);
    }
    public function saveBusqueda(Request $request)
    {

        $indicadores = DB::table('indicadores')
            ->pluck('idIndicador', 'idIndicador')
            ->all();

        $todos = implode(",", $indicadores);
        busqueda::where('idbusqueda', '=', '1')
            ->update([
                'todos' => $todos
            ]);

        $registro = new busqueda();
        $registro->equipohumano = $equipo = isset($request->equipoHumano) ? implode(",", $request->equipoHumano) : 0;
        $registro->innovacion = $innovacion = isset($request->innovacion) ? implode(",", $request->innovacion) : 0;
        $registro->mejora = $mejora = isset($request->mejora) ? implode(",", $request->mejora) : 0;
        $registro->participacion = $participacion = isset($request->participacion) ? implode(",", $request->participacion) : 0;
        $registro->sustentabilidad = $sustentabilidad = isset($request->sustentabilidad) ? implode(",", $request->sustentabilidad) : 0;
        $registro->rentabilidad = $rentabilidad = isset($request->rentabilidad) ? implode(",", $request->rentabilidad) : 0;
        $registro->todos = $equipo . ',' . $innovacion . ',' . $mejora . ',' . $participacion . ',' . $sustentabilidad . ',' . $rentabilidad;
        $registro->fecha = date("Y-m-d");
        $registro->estado = 1;
        $registro->nombre =  $request->nombre;
        $registro->save();

        flash()->addSuccess(
            'Registro Actualizado correctamente!',
            ''
        );
        return Redirect::to('listarBusqueda');
    }
    public function listarBusqueda()
    {
        $data = DB::table('busqueda')->get();


        return view('pages.listarBusqueda', [
            'data' =>  $data


        ]);
    }
    public function editarBusqueda($id)
    {
        DB::table('busqueda')
            ->update(['estado' => 0]);

        DB::table('busqueda')
            ->where('idbusqueda', $id)
            ->update(['estado' => 1]);

        flash()->addSuccess(
            'Registro Actualizado correctamente!',
            ''
        );
        return Redirect::to('listarBusqueda');
    }
    public function eliminarBusqueda($id)
    {
        try {
            $registro = busqueda::find($id);
            $registro->delete();

            flash()->addSuccess(
                'Registro Eliminado correctamente!',
                ''
            );
            return Redirect::to('listarBusqueda');
        } catch (\Exception $e) {
            flash()->addError(
                'No se ha podido eliminar el registro!',
                ''
            );
            return Redirect::to('listarBusqueda');
        }
    }
}
