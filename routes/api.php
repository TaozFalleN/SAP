<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


use App\Http\Middleware\Authenticate;
use App\Http\Middleware\Permissions;
use App\Http\Middleware\Menus;
use App\Http\Middleware\VerifyCsrfAuth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PreferenciasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;

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

