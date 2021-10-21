<?php

<<<<<<< Updated upstream
=======
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('pages.index');
});
=======
Route::get('/', [Controller::class, 'index']);
Route::get('/reservation', [ReservationController::class, 'index']);

>>>>>>> Stashed changes

Auth::routes();
