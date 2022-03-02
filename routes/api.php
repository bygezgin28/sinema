<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/state', [\App\Http\Controllers\TicketController::class, 'listState']);
    Route::post('/cinema/{state_id}', [\App\Http\Controllers\TicketController::class, 'listCinema']);
    Route::post('/movie/{cinema_id}', [\App\Http\Controllers\TicketController::class, 'listMovie']);
    Route::post('/seans/{cinema_id}/{movie_id}', [\App\Http\Controllers\TicketController::class, 'listSeans']);


    Route::post('/ticket/form', [\App\Http\Controllers\TicketController::class, 'formTicket']);
    Route::post('/ticket/{seans_id}', [\App\Http\Controllers\TicketController::class, 'listTicket']);
});


Route::post('/login', [\App\Http\Controllers\ApiController::class, 'login']);
