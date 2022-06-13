<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
    return view('/index');
});


Route::get('/home', [productController::class, 'index']);
Route::post('/delete', [productController::class, 'destroy']);
Route::post('/edit/{product}', [productController::class, 'edit']);
Route::patch('/update/{product}', [productController::class, 'update']);
Route::get('/createProduct', [productController::class, 'create']);
Route::post('/store', [productController::class, 'store']); 
Route::get('/showProduct/{product}', [productController::class, 'show']); 

