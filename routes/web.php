<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompromisosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
    //Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
    Route::get('dashboard', 'App\Http\Controllers\PageController@dashboard');
    Route::get('filosofia', 'App\Http\Controllers\PageController@filosofia');
    Route::get('busqueda', 'App\Http\Controllers\PageController@busqueda');
    Route::post('saveBusqueda', 'App\Http\Controllers\PageController@saveBusqueda');
    Route::get('listarBusqueda', 'App\Http\Controllers\PageController@listarBusqueda');
    Route::get('editarBusqueda/{id}', 'App\Http\Controllers\PageController@editarBusqueda');
    Route::delete('eliminarBusqueda/{id}', 'App\Http\Controllers\PageController@eliminarBusqueda');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('listar', 'App\Http\Controllers\CompromisosController@listar');
    Route::get('add', 'App\Http\Controllers\CompromisosController@add');
    Route::post('save', 'App\Http\Controllers\CompromisosController@save');
    Route::get('editar/{id}', 'App\Http\Controllers\CompromisosController@edit');
    Route::post('editarsave', 'App\Http\Controllers\CompromisosController@editsave');
    Route::post('addDocumento', 'App\Http\Controllers\CompromisosController@addDocumento');
    Route::get('descargar', 'App\Http\Controllers\CompromisosController@descargar');
    Route::get('download/{name}', 'App\Http\Controllers\CompromisosController@download');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('listarUsuario', 'App\Http\Controllers\UsuariosController@listar');
    Route::get('addUsuario', 'App\Http\Controllers\UsuariosController@add');
    Route::post('saveUsuario', 'App\Http\Controllers\UsuariosController@save');
    Route::get('editarUsuario/{id}', 'App\Http\Controllers\UsuariosController@edit');
    Route::post('editarsaveUsuario', 'App\Http\Controllers\UsuariosController@editsave');
    Route::delete('eliminarUsuario/{id}', 'App\Http\Controllers\UsuariosController@eliminar');
});
Route::group(['middleware' => 'auth'], function () {
    //Configuracion del Tablero
    Route::get('cofigTablero', 'App\Http\Controllers\IndicadoresController@configTablero');
    Route::get('cofigFecha', 'App\Http\Controllers\IndicadoresController@configFecha');
    Route::post('saveFecha', 'App\Http\Controllers\IndicadoresController@saveFecha');
    Route::get('setear', 'App\Http\Controllers\IndicadoresController@setear');
    Route::get('inicializar', 'App\Http\Controllers\IndicadoresController@inicializar');
    Route::get('cargar', 'App\Http\Controllers\IndicadoresController@cargar');
    //Menu Configuar
    Route::get('configurar/{id}', 'App\Http\Controllers\IndicadoresController@configurar');
    //Menu Config Editable
    Route::get('confEditable/{id}', 'App\Http\Controllers\IndicadoresController@confEditable');
    //Menu Tableros
    Route::get('tableros/{id}', 'App\Http\Controllers\IndicadoresController@tableros');
    //Menu Indicadores
    Route::get('indicadores/{id}', 'App\Http\Controllers\IndicadoresController@indicadores');
    Route::get('crearValor/{id}/{resultado}/{tipo}', 'App\Http\Controllers\IndicadoresController@crearValor');
    Route::post('saveValor', 'App\Http\Controllers\IndicadoresController@saveValor');
    //historial meses
    Route::get('historialMeses/{id}/{tipo}', 'App\Http\Controllers\IndicadoresController@historialMeses');
    //promedio
    Route::get('promedio/{id}', 'App\Http\Controllers\IndicadoresController@promedio');
    //acciones correctivas
    Route::get('correctivas/{id}/{color?}', 'App\Http\Controllers\IndicadoresController@correctivas');
    Route::post('addDocumentoAcc', 'App\Http\Controllers\IndicadoresController@addDocumentoAcc');
    Route::get('descargarAcc/{resultado}', 'App\Http\Controllers\IndicadoresController@descargarAcc');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('crearMeta/{id}/{tipo}', 'App\Http\Controllers\MetasController@add');
    Route::post('saveMeta', 'App\Http\Controllers\MetasController@save');
    Route::get('editarMeta/{id}/{tipo}/{idRes}', 'App\Http\Controllers\MetasController@edit');
    Route::post('saveEdit', 'App\Http\Controllers\MetasController@editsave');
    Route::get('historial', 'App\Http\Controllers\MetasController@historial');
    //metas futuras
    Route::get('listarMetaFutura/{id}/{tipo}', 'App\Http\Controllers\MetasController@listarMetaFutura');
    Route::get('crearMetaFutura/{id}/{tipo}', 'App\Http\Controllers\MetasController@addFutura');
    Route::post('saveMetaFutura', 'App\Http\Controllers\MetasController@saveFutura');
    Route::get('editarMetaFutura/{id}/{indicador}/{tipo}', 'App\Http\Controllers\MetasController@editFutura');
    Route::post('saveEditFutura', 'App\Http\Controllers\MetasController@editsaveFutura');
    Route::delete('eliminarMetaFutura/{id}/{indicador}/{tipo}', 'App\Http\Controllers\MetasController@eliminarMetaFutura');
});

Route::group(['middleware' => 'auth'], function () {
    //Meses
    Route::get('meses/{id}', 'App\Http\Controllers\GraficasController@meses');
    Route::get('mes/{mes}/{tipo}', 'App\Http\Controllers\GraficasController@mes');
    //Indicadores por meses
    Route::get('indicadoresMeses/{id}', 'App\Http\Controllers\GraficasController@indicadoresMeses');
    Route::get('indicadorXmes/{tipo}/{id}/{a}', 'App\Http\Controllers\GraficasController@indicadorXmes');
    Route::get('todosXmes/{tipo}/{id}', 'App\Http\Controllers\GraficasController@todosXmes');
    //Desempelo general
    Route::get('desempe_o/{id}', 'App\Http\Controllers\GraficasController@desempe_o');
});

//Route::get('listar', [App\Http\Controllers\CompromisosController::class, 'listar']);
//Route::get('listar', 'App\Http\Controllers\CompromisosController@listar');
