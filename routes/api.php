<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);



Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('profile', function (Request $request) { 
        return auth()->user(); 
    });

Route::apiResource('oefeningen', OefeningController::class);

Route::post('/logout', [AuthenticationController::class, 'logout']);
});

Route::fallback(function () {

    return response()->json([
    
    'message' => 'Page Not Found. If error persists, contact admin '], 404);
    
    });