<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningController;
use App\Http\Controllers\PrestatieController;
use App\Http\Controllers\AuthenticationController;


Route::resource('/oefeningen', OefeningController::class)->only(['index', 'show']);
Route::get('/oefeningen/{id}/prestaties', [PrestatieController::class, 'indexFunctie']);
Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    //    PROTECTED ROUTES
    Route::resource('oefeningen', OefeningController::class)->except(['index', 'show']);

    Route::get('profile', function(Request $request) { return auth()->user();});
    Route::post('/logout', [AuthenticationController::class, 'logout']);
});

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found'], 404);
});
