<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Middleware\TestMiddleware;

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
    return view('welcome');
});



Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function(){
    // Route::resource('post', PostController::class)->only(['show']);
    // Route::resource('post', PostController::class)->except(['show']);
    // Route::resource('category', CategoryController::class);
    Route::get('/', function(){
        return view('dashboard');
    })->name('dashboard');
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class
    ]);

});

Route::group(['prefix' => 'blog'], function(){
    Route::controller(BlogController::class)->group(function(){
        Route::get('/','index');
    });
});
// Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
//     Route::get('/', function(){
//         return view('dashboard');
//     })->middleware(['admin'])->name('dashboard');


//     Route::resource('post', PostController::class)->middleware(['admin']);
//     Route::resource('category', CategoryController::class)->middleware(['admin']);


//     Route::get('/control', function(){
//         return 'Panel de control';
//     })->middleware(['user', 'admin']);
// });

require __DIR__.'/auth.php';

// Route::get('/test/{id?}', function($id = 10){
//     echo "El argumento es $id";
// });

// Route::controller(PostController::class)->group(function(){
//     Route::get('post', 'index')->name('post.index');
//     Route::get('post/{post}', 'show')->name('post.show');
//     Route::get('post/create', 'create')->name('post.create');
//     Route::get('post/{post}/edit', 'edit')->name('post.edit');

//     Route::post('post', 'store')->name('post.store');
//     Route::put('post/{post}', 'update')->name('post.update');
//     Route::delete('post/{post}', 'delete')->name('post.destroy');
// });

Route::middleware([TestMiddleware::class])->group(function(){
    Route::get('/test/{id?}', function($id = 10){
        echo "El argumento es $id";
    });
});



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