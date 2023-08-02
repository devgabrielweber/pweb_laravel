<?php

use App\Http\Controllers\usuarioController;
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

Route::get('/usuario',[usuarioController::class,'index']);

Route::get('/teste', function(){
    return "<h4>FALA LARAVELLL</h4>";
});

Route::get('/', function () {
    return view('welcome');
});