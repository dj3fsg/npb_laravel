<?php
use App\Http\Controllers\NpbController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/npb/games',[NpbController::class, 'index']);
Route::get('/npb/create',[NpbController::class, 'create']);
Route::post('/npb/store', [NpbController::class, 'store']);
Route::get('/npb/edit/{id}',[NpbController::class, 'edit']);
Route::post('/npb/update/{id}',[NpbController::class, 'update']);
Route::post('/npb/delete/{id}',[NpbController::class, 'delete']);