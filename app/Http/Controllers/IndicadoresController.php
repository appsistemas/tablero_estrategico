<?php

namespace App\Http\Controllers;

use App\Models\Indicadores;
use App\Models\ArchivoCompromiso;
use App\Models\Resultado;
use App\Models\User;
use App\Models\Busqueda;
use App\Models\Configuracion;
use Flasher\Prime\Storage\StorageBag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Url;


class IndicadoresController extends Controller
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

    public function configurar($indicador)
    {
        $array = $this->busqueda();
        $data = indicadores::where('idTablero', '=', $indicador)
            //->join('users', 'users.id', '=', 'indicadores.responsable')
            ->where('estado', '=', '0')
            //->where('idusuario', '=', '0')
            //->orderBy('id_compromiso', 'desc')
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        $indicador = DB::table('tablero')
            ->where('idTablero', '=', $indicador)
            ->first();

        return View('configurar.configIndicadores', [
            'data' => $data,
            'indicador' => $indicador->nombreTablero,
            'objetivo' => $indicador->objetivo,


        ]);
    }
    public function configTablero()
    {
        $indicadores = DB::table('configuracion')
            ->where('estado', 0)
            ->get()
            ->count();

        if ($indicadores == 2) {
            $setear = 1;
            $setearS = '-';
            $inicializar = 1;
            $inicializarS = 'pointer-events: none; display: inline-block;';
            $cargar = 0;
            $cargarS = '-';
        } else {


            $setear = 0;
            $setearS = '-';
            $inicializar = 0;
            $inicializarS = 'pointer-events: none; display: inline-block;';
            $cargar = 0;
            $cargarS = 'pointer-events: none; display: inline-block;';
        }

        return View('configurar.configTablero', [
            'setear' => $setear,
            'setearS' => $setearS,
            'inicializar' => $inicializar,
            'inicializarS' => $inicializarS,
            'cargar' => $cargar,
            'cargarS' => $cargarS,
        ]);
    }
    public function setear()
    {

        $setear = 0;
        $setearS = '-';
        $inicializar = 0;
        $inicializarS = '-';
        $cargar = 0;
        $cargarS = 'pointer-events: none; display: inline-block;';

        $resultado = DB::table('resultado')
            ->update(['estado' => 0]);

        $config = DB::table('configuracion')
            ->where('idconf', 3)
            ->update(['estado' => 0]);

        if ($config == 1) {
            $setear = 1;
        }
        return View('configurar.configTablero', [
            'setear' => $setear,
            'setearS' => $setearS,
            'inicializar' => $inicializar,
            'inicializarS' => $inicializarS,
            'cargar' => $cargar,
            'cargarS' => $cargarS,
        ]);
    }
    public function inicializar()
    {

        $setear = 1;
        $inicializar = 0;
        $inicializarS = '-';
        $cargar = 0;
        $cargarS = '-';


        $indicadores = DB::table('indicadores')
            ->update(['estado' => 0]);

        $config = DB::table('configuracion')
            ->where('idconf', 2)
            ->update(['estado' => 0]);

        if ($config == 1) {
            $inicializar = 1;
        }
        return View('configurar.configTablero', [
            'setear' => $setear,
            'inicializar' => $inicializar,
            'inicializarS' => $inicializarS,
            'cargar' => $cargar,
            'cargarS' => $cargarS,
        ]);
    }
    public function cargar()
    {
        $setear = 1;
        $inicializar = 1;
        $cargar = 0;
        $cargarS = '-';

        $anio = date('Y');
        $mes = (date("n") - 1);
        $mesActual = date('n');

        $indicadores = DB::table('resultado')
            ->where('idMes', '=', $mes)
            ->where('año', '=', $anio)
            ->get();
        foreach ($indicadores as $valor) {
            $registro = new Resultado();
            $registro->idIndicador = $valor->idIndicador;
            $registro->idMes = $mesActual;
            $registro->meta = $valor->meta;
            $registro->valor = '';
            $registro->año = $anio;
            $registro->estado = 1;
            $registro->save();
        }
        $indicadores = DB::table('indicadores')
            ->update(['estado' => 1]);

        $config1 = DB::table('configuracion')
            ->where('idconf', 2)
            ->update(['estado' => 1]);

        $config2 = DB::table('configuracion')
            ->where('idconf', 3)
            ->update(['estado' => 1]);

        if ($config1 == 1 && $config2 == 1) {
            $cargar  = 1;
        }
        return View('configurar.configTablero', [
            'setear' => $setear,
            'inicializar' => $inicializar,
            'cargar' => $cargar,
            'cargarS' => $cargarS,
        ]);
    }

    public function confEditable($tipo)
    {
        $array = $this->busqueda();
        $mes = date("n");
        $anio = date("Y");
        $data = indicadores::where('idTablero', '=', $tipo)
            ->join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.estado', '=', '1')
            ->where('idMes', '=', $mes)
            ->where('valor', '=', '')
            ->where('año', '=', $anio)
            //->orderBy('id_compromiso', 'desc')
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        $indicador = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        return View('configurar.editIndicadores', [
            'data' => $data,
            'indicador' => $indicador->nombreTablero,
            'tipo' => $tipo,
            'objetivo' => $indicador->objetivo,


        ]);
    }

    public function tableros($tipo)
    {
        $array = $this->busqueda();
        $mes = date("n")-1;
        $anio = date("Y");
        $data = indicadores::where('idTablero', '=', $tipo)
            ->join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.estado', '=', '1')
            ->where('idMes', '=', $mes)
            ->where('año', '=', $anio)
            //->orderBy('id_compromiso', 'desc')
            ->whereIn('indicadores.idIndicador', $array)
            ->get();


        $indicador = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        return View('configurar.tableroIndicadores', [
            'data' => $data,
            'indicador' => $indicador->nombreTablero,
            'tipo' => $tipo,
            'objetivo' => $indicador->objetivo,


        ]);
    }

    public function indicadores($tipo)
    {
        $array = $this->busqueda();
        $mes = date("n")-1;
        $anio = date("Y");
        $data = indicadores::where('idTablero', '=', $tipo)
            ->join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('resultado.estado', '=', '1')
            ->where('idMes', '=', $mes)
            ->where('valor', '=',null)
            ->where('año', '=', $anio)
            //->orderBy('id_compromiso', 'desc')
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        $indicador = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        $fechaIndicador = DB::table('configuracion')
            ->where('idconf', '=', 1)
            ->first();

        return View('configurar.listarIndicadores', [
            'data' => $data,
            'indicador' => $indicador->nombreTablero,
            'tipo' => $tipo,
            'objetivo' => $indicador->objetivo,
            'fechaIndicador' => $fechaIndicador


        ]);
    }
    public function crearValor($id, $resultado, $tipo)
    {
        $data = indicadores::where('resultado.idresultado', '=', $resultado)
            ->join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->first();


        return view('resultado.add', [
            'id' => $id,
            'tipo' => $tipo,
            'objetivo' => $data->objetivo,
            'indicador' => $data->indicador,
            'meta' => $data->meta,
            'tipoH' => $data->tipo,
            'idresultado' => $data->idresultado,
        ]);
    }
    public function saveValor(Request $request)
    {


        if ($request->valor == '') {
            $color = '-';
        } else if ($request->tipoH == 'h' && $request->valor >= ($request->meta)) {
            $color = 'V';
        } else if ($request->tipoH == 'h' && $request->valor >= ($request->meta * 0.9)) {
            $color = 'A';
        } else if ($request->tipoH == 'h' && $request->valor < ($request->meta * 0.9)) {
            $color = 'R';
        } else if ($request->tipoH == 'i' && $request->valor <= ($request->meta)) {
            $color = 'V';
        } else if ($request->tipoH == 'i' && $request->valor <= ($request->meta * 1.1)) {
            $color = 'A';
        } else if ($request->tipoH == 'i' && $request->valor > ($request->meta * 1.1)) {
            $color = 'R';
        } else if ($request->tipoH == 'n' && $request->valor == ($request->meta)) {
            $color = 'V';
        } else if ($request->tipoH == 'n' && $request->valor <> ($request->meta)) {
            $color = 'R';
        }

        $data = resultado::find($request->idresultado);
        $data->valor = $request->valor;
        $data->colores = $color;
        $data->save();


        flash()->addSuccess(
            'Registro Ingresado correctamente!',
            ''
        );
        return Redirect::to('indicadores/' . $request->tipo);
    }

    public function historialMeses($id, $tipo)
    {
        $array = $this->busqueda();
        $mes = date("n") - 1;
        $anio = date("Y");
        $data = indicadores::where('idTablero', '=', $tipo)
            ->join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
            ->where('año', '=', $anio)
            ->where('indicadores.idIndicador', '=', $id)
            //->orderBy('id_compromiso', 'desc')
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        $tablero = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        return View('paginas.historialMeses', [
            'data' => $data,
            'indicador' => $tablero->nombreTablero,
            'tipo' => $tipo


        ]);
    }
    public function promedio($tipo)
    {

        $array = $this->busqueda();
        $data = indicadores::where('idTablero', '=', $tipo)
            ->join('promedio', 'promedio.idIndicador', '=', 'indicadores.idIndicador')
            ->whereIn('indicadores.idIndicador', $array)
            ->get();

        $indicador = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        return View('paginas.promedio', [
            'data' => $data,
            'indicador' => $indicador->nombreTablero,
            'tipo' => $tipo
        ]);
    }
    public function correctivas($tipo, $color = null)
    {
        $array = $this->busqueda();
        if ($color == null) {
            $data = [];
        } else {
            $mes = date("n");
            $anio = date("Y");
            $data = indicadores::where('idTablero', '=', $tipo)
                ->join('resultado', 'resultado.idIndicador', '=', 'indicadores.idIndicador')
                ->join('users', 'users.id', '=', 'indicadores.responsable')
                ->where('resultado.estado', '=', '1') // cambiar a 0
                ->where('idMes', '=', $mes)
                ->where('año', '=', $anio)
                ->where('colores', '=', $color)
                ->whereIn('indicadores.idIndicador', $array)
                ->get();
        }
        $indicador = DB::table('tablero')
            ->where('idTablero', '=', $tipo)
            ->first();

        return View('configurar.accionesCorrectivas', [
            'data' => $data,
            'indicador' => $indicador->nombreTablero,
            'tipo' => $tipo,
            'objetivo' => $indicador->objetivo,
        ]);
    }
    public function addDocumentoAcc(Request $request)
    {
        $file = $request->file('subir_archivo');
        $nombre =  time() . "_" . $file->getClientOriginalName();
        //$file->store('public');
        \Storage::disk('acciones')->put($nombre,  \File::get($file));

        $registro = Resultado::find($request->idresultado);
        $registro->nameArchivo = $nombre;
        $registro->archivo = 1;
        $registro->save();

        flash()->addSuccess(
            'Archivo subido correctamente!',
            ''
        );
        return Redirect::to('correctivas/' . $request->tipo . '/' . $request->color);
    }
    public function descargarAcc($resultado)
    {
        return \Storage::disk('acciones')->download($resultado);
    }

    public function configFecha()
    {
        $fecha = DB::table('configuracion')
            ->where('idconf', '=', 1)
            ->first();

        return View('configurar.configFecha', [
            'fecha' => $fecha,
        ]);

    }
    public function saveFecha(Request $request)
    {

        $fecha = Configuracion::find($request->id);
        $fecha->fecha = $request->fecha;
        $fecha->save();

        flash()->addSuccess(
            'Actulizado correctamente!',
            ''
        );
        return Redirect::to('cofigFecha');

    }
}
