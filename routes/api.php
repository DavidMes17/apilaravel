<?php

use App\Http\Controllers\EcoController;
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

Route::get('/', [EcoController::class, 'show']);

Route::get('/dados',[EcoController::class, 'dados']);

Route::get('/hello/{msg?}', function($msg)
{
    return response()->json(
        [
            "mensagem" => $msg
        ],200);
});


