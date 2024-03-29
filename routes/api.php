<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
//use App\Models\Event;
use App\Http\Controllers\Api\EventController; 


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/prova", function () {
    $dati= User::all();
    return response()->json($dati);
});// solo di prova perche dovra restituire tutti gli eventi 

Route::get("/events" , [EventController::class, "index"]);

Route::get("events/{id}", [EventController::class,  "show"]);