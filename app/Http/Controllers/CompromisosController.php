<?php

namespace App\Http\Controllers;

use App\Models\compromiso;
use App\Models\ArchivoCompromiso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Url;

class CompromisosController extends Controller
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

    public function listar()
    {

        $data = DB::table('compromiso')
            ->where('estado', '=', '1')
            ->orderBy('id_compromiso', 'desc')
            ->get();

        return View('compromisos.list', [
            'data' => $data,

        ]);
    }
    public function add()
    {
        $usuarios = User::pluck('name', 'name')
            ->all();

        return view('compromisos.add', [
            'usuarios' => $usuarios,
        ]);
    }
    public function save(Request $request)
    {
        $registro = new compromiso();
        $registro->fecha = $request->fecha;
        $registro->que = $request->que;
        $registro->quien = $request->quien;
        $registro->cuando = $request->cuando;
        $registro->avance = $request->avance;
        $registro->comentario = $request->comentario;
        $registro->estatus = $request->estatus;
        $registro->estado = 1;
        $registro->save();


        flash()->addSuccess(
            'Registro Ingresado correctamente!',
            ''
        );
        return Redirect::to('listar');
    }
    public function edit($id)
    {
        $data = compromiso::find($id);
        $datos = array(
            "SELECCIONE" => " ",
            "FINALIZADO" => "FINALIZADO",
            "PROCESO" => "PROCESO",
            "PENDIENTE" => "PENDIENTE"
        );
        $usuarios = User::pluck('name', 'name')
            ->all();

        return View('compromisos.edit', [
            'data' => $data,
            'modulos' => $datos,
            'usuarios' => $usuarios,

        ]);
    }
    public function editsave(Request $request)
    {
        $registro = compromiso::find($request->id_compromiso);
        $registro->fecha = $request->fecha;
        $registro->que = $request->que;
        $registro->quien = $request->quien;
        $registro->cuando = $request->cuando;
        $registro->avance = $request->avance;
        $registro->comentario = $request->comentario;
        $registro->estatus = $request->estatus;
        $registro->estado = 1;
        $registro->save();

        flash()->addSuccess(
            'Registro Actualizado correctamente!',
            ''
        );
        return Redirect::to('listar');
    }
    public function addDocumento(Request $request)
    {
        $file = $request->file('subir_archivo');
        $nombre =  time() . "_" . $file->getClientOriginalName();
        //$file->store('public');
        \Storage::disk('public')->put($nombre,  \File::get($file));

        $archivo = new ArchivoCompromiso;
        $archivo->id_compromiso = $request->idCompromiso;
        $archivo->nombreArchComp = $nombre;
        $archivo->estadoArchComp = 1;
        $archivo->save();


        flash()->addSuccess(
            'Archivo subido correctamente!',
            ''
        );
        return Redirect::to('listar');
    }
    public function descargar(Request $request)
    {

        $data = ArchivoCompromiso::where('id_compromiso', $request->idComp)
            ->orderBy('idArchComp', 'desc')
            ->get();
        $detalleTabla = '<thead class="" style="font-size :10px">
                                <tr>
                                        <th style="color: #51cbce; font-size: 10px;">Nombre</th>
                                        <th style="color: #51cbce; font-size: 10px;">Acción</th>
                                </tr>
                            </thead>
                            <tbody>';
        foreach ($data as $item) {
            $detalleTabla .= '<tr style="font-size :10px">';
            $detalleTabla .= '<td>' . $item->nombreArchComp . '</td>';
            $detalleTabla .= '<td><a href="' . URL::to("download/$item->nombreArchComp") . '" target="_blank" title="Descargar"
            class="btn btn-info btn-sm"><i class="nc-icon nc-cloud-download-93"></i></a></td>';
            $detalleTabla .= '</tr>';
        }
        return $detalleTabla .= "</tbody>";
    }

    public function download($nombreArchComp)
    {
        return \Storage::disk('public')->download($nombreArchComp);
    }
}
