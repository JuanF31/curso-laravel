<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;


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
Route::get('/', function(){
    return view('welcome');
});

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);

/*Una ruta del tipo recurso ahorra la definicion de todas las 
siguientes rutas */

// Route::get('post', [PostController::class, 'index']);
// Route::get('post/{post}', [PostController::class, 'show']);
// Route::get('post/create', [PostController::class, 'create']);
// Route::get('post/{post}/edit', [PostController::class, 'edit']);

// Route::post('post', [PostController::class, 'store']);
// Route::put('post/{post}', [PostController::class, 'update']);
// Route::delete('post/{post}', [PostController::class, 'delete']);


// Route::get('/', [TestController::class, 'index']);

// Route::get('/', [TestController::class, 'test']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contacto', function(){
//     return 'Contactame';
// })->name('contacto');

// Route::get('/custom', function() {
//     $msj = 'Mensaje desde el server UwU';
//     $data =  array(
//         'msj' => $msj,
//         'edad' => 15
//     );
//     return view('custom', $data);
// });