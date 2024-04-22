<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', HomeController::class);

//grupo de rutas con el mismo controlador
Route::controller(UsuariosController::class)->group(function(){
    Route::get('usu/','index');
    Route::get('usu/create','create');
    Route::get('usu/show','show');
});

//Route::get('usu/',[UsuariosController::class, 'index']);
//Route::get('usu/create',[UsuariosController::class, 'create']);
//Route::get('usu/show',[UsuariosController::class, 'show']);