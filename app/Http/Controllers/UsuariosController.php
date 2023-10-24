<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Url;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
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

        $data = User::orderBy('id', 'asc')
            ->get();


        return View('users.list', [
            'data' => $data,

        ]);
    }
    public function add()
    {
        $rol = Rol::pluck('rol', 'idrol')
            ->all();

        return view('users.add', [
            'rol' => $rol,
        ]);
    }
    public function save(Request $request)
    {

        $registro = new User();
        $registro->name = $request->name;
        $registro->email = $request->email;
        $registro->password = Hash::make($request->pwd);
        $registro->idrol = $request->rol;
        $registro->save();

        flash()->addSuccess(
            'Registro Ingresado correctamente!',
            ''
        );
        return Redirect::to('listarUsuario');
    }
    public function edit($id)
    {
        $data = user::find($id);
        $rol = Rol::pluck('rol', 'idrol')
            ->all();

        return View('users.edit', [
            'data' => $data,
            'rol' => $rol,

        ]);
    }
    public function editsave(Request $request)
    {
        $registro = user::find($request->id);
        $registro->name = $request->name;
        $registro->email = $request->email;
        $registro->password = Hash::make($request->pwd);
        $registro->idrol = $request->rol;
        $registro->save();


        flash()->addSuccess(
            'Registro Actualizado correctamente!',
            ''
        );
        return Redirect::to('listarUsuario');
    }

    public function eliminar($id)
    {
        try {
            $registro = user::find($id);
            $registro->delete();

            flash()->addSuccess(
                'Registro Eliminado correctamente!',
                ''
            );
            return Redirect::to('listarUsuario');
        } catch (\Exception $e) {
            flash()->addError(
                'No se ha podido eliminar el registro!',
                ''
            );
            return Redirect::to('listarUsuario');
        }
    }
}
