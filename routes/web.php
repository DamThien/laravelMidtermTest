<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form_process;
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

Route::get('/add-form',[Form_process::class,'index']);
Route::post('/add-form',[Form_process::class, 'store']);
Route::get('/', [Form_process::class, 'homepage']);
Route::get('/detail/{id}', [Form_process::class, 'Deatail']);
Route::get('/hoaqua{cate}', [Form_process::class, 'category']);
