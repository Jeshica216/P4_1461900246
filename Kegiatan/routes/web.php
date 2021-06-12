<?php

use\App\Http\Controllers\PerpusController;
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

Route::get('/', function () {
    return view('welcome');
});

route::get('/perpus/export', [PerpusController::class, 'perpusexport']);
Route::resource('perpus', PerpusController::class);
Route::resource('tambah0246', PerpusController::class);
Route::resource('edit0246', PerpusController::class);