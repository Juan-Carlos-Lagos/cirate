<?php

use App\Http\Controllers\auth\loginController as AuthLoginController;
use App\Http\Controllers\BdController;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\llamadasRadiosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\radioIdController;
use App\Http\Controllers\radiosController;
use App\Http\Controllers\reporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Models\codigoreporteaccion;

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


//login
Route::prefix('auth')->group(function () {

  Route::get('login', [AuthLoginController::class, 'login'])->name('login');
  Route::post('login', [AuthLoginController::class, 'loginVerify'])->name('login.verify');
  Route::get('register', [AuthLoginController::class, 'register'])->name('register');
  Route::post('register', [AuthLoginController::class, 'registerverify']);
  Route::post('signOut', [AuthLoginController::class, 'signOut'])->name('signOut');
});

//protegidas
Route::middleware('auth')->group(function () {
  Route::get('home', [HomeController::class, 'index'])->name('dashboard');
  Route::post('codigoEmergencia', [HomeController::class, 'generarCodigoEmergencia'])->name('home.CodigoEmergencia');

  // Planta Routes
Route::get('busqueda', [PlantaController::class, 'mostrarFormulario'])->name('planta.busqueda');
Route::post('buscar', [PlantaController::class, 'buscar'])->name('planta.buscar');

//Reportes
Route::get('reportes', [reporteController::class, 'reporte'])->name('reporte.nuevo');
//pruebas
Route::get('/codigo-reporte/{id}', [reporteController::class, 'getCodigoReporteData']);
//finpruebsa


  // Directorio routes
  Route::get('buscar', [directorioController::class, 'buscar'])->name('directorio.buscar');
  
// Estás dos rutas son para: la de ingresar nos está enviando la información y la otra ruta
// store nos está mostrando la vista 
  Route::post('/store', [directorioController::class, 'store'])->name('store');
  Route::get('/ingresar', [directorioController::class, 'ingresar'])->name('ingresar');

  //Radios Routes
  //Ruta pra la busqueda de las grabaciones
  Route::get('/buscarPorFecha', [llamadasRadiosController::class, 'buscarPorFecha'])->name('radios.buscar');
  // Ruta para mostrar la vista de actualización y creación de radios
  Route::get('actualizar', [RadioIdController::class, 'cargaTabla'])->name('radios.cargaTabla');
  // Ruta para crear un nuevo radio en la base de datos
  Route::post('crear', [RadioIdController::class, 'nuevoRadio'])->name('radios.nuevoRadio');

  //Usuarios Routes
  Route::get('nuevo', [UsuariosController::class, 'registro'])->name('usuarios.nuevo');
  Route::post('nuevo', [UsuariosController::class, 'registerverify']);

  //Usuarios Routes: nuevo es para recepcionar la información y la ruta show es para
// mostrar la vista
  Route::post('/nuevo',[UsuariosController::class, 'nuevo'])->name('usuarios.agregar');
  Route::get('/show', [UsuariosController::class, 'show'])->name('show');

// Ruta destroy para eliminar usuarios de la tabla usuarios
  Route::delete('/destroy/{user}', [UsuariosController::class, 'destroy'])->name('nuevo.destroy');



  //BD Routes
  //   Route::get('/backup', function () {
  //     return view('BD.bd');
  //   })->name('bd.backup');
  // //Ruta para manejar la creación de la copia de seguridad
  //   Route::post('/create-backup',[BdController::class, 'createBackup'])->name('createBackup');
  Route::prefix('bd')->group(function () {
    Route::get('/backup', function () {
      return view('BD.bd');
    })->name('bd.backup');

    // Ruta para manejar la creación de la copia de seguridad
    Route::post('/create-backup', [BdController::class, 'createBackup'])->name('createBackup');
  });
});











//

/*/antes de las pruebas 2.0
Route::get('/', function () {
   return redirect()->route('login');
})->middleware('guest');
/*/
// Route::get('/', LoginController::class);
//Route::middleware(['auth'])->group(function () {


  //  Route::get('/home', HomeController::class)->name('home');

    //grupo de rutas con el mismo controlador
 //   Route::controller(UsuariosController::class)->group(function(){
 //       Route::get('usu/','index');
 //       Route::get('usu/create','create');
 //       Route::get('usu/show','show');
  //  });



    //Route::get('usu/',[UsuariosController::class, 'index']);
    //Route::get('usu/create',[UsuariosController::class, 'create']);
    //Route::get('usu/show',[UsuariosController::class, 'show']);


//});
