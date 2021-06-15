<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\V1\CareTypesController;
use App\Http\Controllers\V1\InstituteController;
use App\Http\Controllers\V1\CareController;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::resource('caretypes', CareTypesController::class);
Route::resource('institutes', InstituteController::class);
Route::resource('cares', CareController::class);