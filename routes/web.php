<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //cada clase que uso debe ser importada en los archivos correspondientes
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

// Route::get('/', function () {
//     return view('welcome');
// });
//como las peticiones son de tipo get y no tiene uso de logica puedo retornar directamete estos vistas


//simulo una variable para pasarla a la vista

Route::view('/', 'welcome')->name('home');

Route::get('/blog',[PostController::class, 'index'])->name('blog'); 

Route::get('/blog/1', [PostController::class , 'show']);

Route::view('/contact', 'contact')->name('contact');

Route::view('/about', 'about')->name('about');
