<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use App\Models\Indicadores;
use App\Models\MetasFuturas;
use App\Models\Resultado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Url;

class MetasController extends Controller
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


    public function add($id, $tipo)
    {
        $data = indicadores::where('idIndicador', '=', $id)
            ->first();

        return view('metas.add', [
            'id' => $id,
            'tipo' => $tipo,
            'objetivo' => $data->objetivo,
            'indicador' => $data->indicador
        ]);
    }
    public function save(Request $request)
    {
        $registro = new Resultado;
        $registro->idIndicador = $request->idIndicador;
        $registro->idMes = ($request->mes);
        $registro->meta = $request->meta;
        $registro->valor = '';
        $registro->año = $request->ao;
        $registro->estado = 1;
        $registro->save();

        $indicadores = DB::table('indicadores')
            ->where('idIndicador', '=', $request->idIndicador)
            ->update(['estado' => 1]);


        flash()->addSuccess(
            'Registro Ingresado correctamente!',
            ''
        );
        return Redirect::to('configurar/' . $request->tipo);
    }
    public function edit($id, $tipo, $idres)
    {
        $data = indicadores::where('idIndicador', '=', $id)
            ->first();

        $resultado = resultado::where('idresultado', '=', $idres)
            ->first();

        return view('metas.edit', [
            'id' => $id,
            'meta' => $resultado->meta,
            'idresultado' => $resultado->idresultado,
            'tipo' => $tipo,
            'objetivo' => $data->objetivo,
            'indicador' => $data->indicador
        ]);
    }
    public function editsave(Request $request)
    {


        $anterior = resultado::find($request->idresultado);

        $data = resultado::find($request->idresultado);
        $data->meta = $request->meta;
        $data->save();

        $registro = new Historial;
        $registro->idresultado = $request->idresultado;
        $registro->meta_actual = $request->meta;
        $registro->meta_anterior = $anterior->meta;
        $registro->fecha = date("Y-m-d");
        $registro->save();

        flash()->addSuccess(
            'Registro Actualizado correctamente!',
            ''
        );
        return Redirect::to('confEditable/' . $request->tipo);
    }

    public function historial(Request $request)
    {
        $data = Historial::where('idresultado', $request->idComp)
            ->orderBy('id_historial', 'desc')
            ->get();
        $cont = 0;

        $detalleTabla = '<thead class="" style="font-size :10px">
                                <tr>
                                        <th style="color: #51cbce; font-size: 10px;">Nro</th>
                                        <th style="color: #51cbce; font-size: 10px;">Meta Actual</th>
                                        <th style="color: #51cbce; font-size: 10px;">Meta Aterior</th>
                                        <th style="color: #51cbce; font-size: 10px;">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>';
        foreach ($data as $item) {
            $cont++;
            $detalleTabla .= '<tr style="font-size :10px">';
            $detalleTabla .= '<td>' . $cont . '</td>';
            $detalleTabla .= '<td>' . $item->meta_actual . '</td>';
            $detalleTabla .= '<td>' . $item->meta_anterior . '</td>';
            $detalleTabla .= '<td>' . $item->fecha . '</td>';
            $detalleTabla .= '</tr>';
        }
        return $detalleTabla .= "</tbody>";
    }

    public function listarMetaFutura($id, $tipo)
    {
        //auth()->id();

        $data = MetasFuturas::where('id_indicador', '=', $id)
            ->where('id_usuario', '=', '1')
            ->get();

        return view('metas.listarFuturas', [
            'id' => $id,
            'tipo' => $tipo,
            'data' => $data,

        ]);
    }

    public function addFutura($id, $tipo)
    {
        $data = indicadores::where('idIndicador', '=', $id)
            ->first();

        return view('metas.addFuturas', [
            'id' => $id,
            'tipo' => $tipo,
            'objetivo' => $data->objetivo,
            'indicador' => $data->indicador
        ]);
    }
    public function saveFutura(Request $request)
    {
        $registro = new MetasFuturas();
        $registro->id_indicador = $request->idIndicador;
        $registro->id_usuario = auth()->id();
        $registro->enero = $request->enero;
        $registro->febrero = $request->febrero;
        $registro->marzo = $request->marzo;
        $registro->abril = $request->abril;
        $registro->mayo = $request->mayo;
        $registro->junio = $request->junio;
        $registro->julio = $request->julio;
        $registro->agosto = $request->agosto;
        $registro->septiembre = $request->septiembre;
        $registro->octubre = $request->octubre;
        $registro->noviembre = $request->noviembre;
        $registro->diciembre = $request->diciembre;
        $registro->estado = 1;

        $registro->save();

        $indicadores = DB::table('indicadores')
            ->where('idIndicador', '=', $request->idIndicador)
            ->update(['estado' => 1]);


        flash()->addSuccess(
            'Registro Ingresado correctamente!',
            ''
        );
        return Redirect::to('listarMetaFutura/' . $request->idIndicador . '/' . $request->tipo);
    }
    public function editFutura($id, $indicador, $tipo)
    {

        $data = MetasFuturas::where('id_meta', '=', $id)
            ->first();

        return view('metas.editFuturas', [
            'id' => $id,
            'indicador' => $indicador,
            'tipo' => $tipo,
            'data' => $data

        ]);
    }
    public function editsaveFutura(Request $request)
    {


        $registro = MetasFuturas::find($request->id);
        $registro->id_indicador = $request->idIndicador;
        $registro->id_usuario = auth()->id();
        $registro->enero = $request->enero;
        $registro->febrero = $request->febrero;
        $registro->marzo = $request->marzo;
        $registro->abril = $request->abril;
        $registro->mayo = $request->mayo;
        $registro->junio = $request->junio;
        $registro->julio = $request->julio;
        $registro->agosto = $request->agosto;
        $registro->septiembre = $request->septiembre;
        $registro->octubre = $request->octubre;
        $registro->noviembre = $request->noviembre;
        $registro->diciembre = $request->diciembre;
        $registro->save();

        flash()->addSuccess(
            'Registro Actualizado correctamente!',
            ''
        );
        return Redirect::to('listarMetaFutura/' . $request->idIndicador . '/' . $request->tipo);
    }
    public function eliminarMetaFutura($id, $indicador, $tipo)
    {
        try {
            $registro = MetasFuturas::find($id);
            $registro->delete();

            flash()->addSuccess(
                'Registro Eliminado correctamente!',
                ''
            );
            return Redirect::to('listarMetaFutura/' . $indicador . '/' . $tipo);
        } catch (\Exception $e) {
            flash()->addError(
                'No se ha podido eliminar el registro!',
                ''
            );
            return Redirect::to('listarMetaFutura/' . $indicador . '/' . $tipo);
        }
    }
}
