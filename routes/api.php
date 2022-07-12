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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('recepies', function () {
        return response()->json([
            [
                'id' => 1,
                'name' => 'Kutya',
                'text' => 'wuff wuff'
            ],
            [
                'id' => 2,
                'name' => 'Cica',
                'text' => 'mew mew'
            ],
            [
                'id' => 3,
                'name' => 'Teknoc',
                'text' => '...'
            ],
        ]);
    });
});