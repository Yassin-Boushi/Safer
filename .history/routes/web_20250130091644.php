<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;
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
    return redirect('flights');
});

Route::view('login', 'login');
Route::view('add_flight', 'flight.add');

////////////////////////// account
Route::post('account/login', [AccountController::class, 'login']);
Route::get('account/logout', [AccountController::class, 'logout']);

////////////////////////////// flight
Route::resource('flights', FlightController::class);
Route::get('flight/edit/{id}', [FlightController::class, 'edit']);
Route::post('flight/update/{id}', [FlightController::class, 'update']);
Route::get('flight/destroy/{id}', [FlightController::class, 'destroy']);


////////////////////////////// ticket
Route::resource('tickets', TicketController::class);
Route::get('ticket/add/{flight_id}/{name}/{card_code}', [TicketController::class, 'store']);
Route::get('ticket/edit/{id}', [TicketController::class, 'edit']);
// Route::get('ticket/update/{id}', [TicketController::class, 'update']);
Route::get('ticket/destroy/{id}', [TicketController::class, 'destroy']);
