<?php

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\Permissions;
use App\Http\Middleware\Menus;
use App\Http\Middleware\VerifyCsrfAuth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PreferenciasController;
use App\Http\Controllers\PermisoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
}); 
 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/doLogin', [LoginController::class, 'login'])->name('doLogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/sesion', [SesionController::class, 'index'])->name('sesion');
Route::get('/inicio_sesion/{token}', [SesionController::class, 'inicio'])->name('inicio_sesion');

Route::put('/actualizarPreferencias', [PreferenciasController::class, 'actualizarPreferencias']);

Route::middleware([Permissions::class])->group(function () {
    Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

    Route::get('/formularioPermiso', [PermisoController::class, 'cargarFormularioPermiso'])->name('formularioPermiso');
    Route::post('/registrarPermiso', [PermisoController::class, 'registrarPermiso'])->name('registrarPermiso');

    Route::get('/listadoPermisos', [PermisoController::class, 'listaPermisos'])->name('listadoPermisos');
});







