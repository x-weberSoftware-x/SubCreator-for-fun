<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubController;

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

Route::get('/subs', [SubController::class, 'index']);
Route::get('/subs/create', [SubController::class, 'create']);
Route::get('/subs/{id}', [SubController::class, 'show']);

Route::POST('/subs', [SubController::class, 'store']);

Route::DELETE('/subs/{id}', [SubController::class, 'destroy']);
