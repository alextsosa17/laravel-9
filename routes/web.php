<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/','welcome')->name('home');

Route::view('/blog','blog')->name('blog');

Route::view('/contact','contact')->name('contact');

Route::view('/about','about')->name('about');

