<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\szakdogaController;
use App\Http\Controllers\UserController;


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

Route::get('/szakdogaGet', [szakdogaController::class, 'index']);
Route::post('/szakdogaUj', [szakdogaController::class, 'index2']);

Route::put('/szakdoga/{id}', [szakdogaController::class, 'index3']);
Route::delete('/szakdoga/{id}', [szakdogaController::class, 'index4']);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

require __DIR__ . '/auth.php';*/
