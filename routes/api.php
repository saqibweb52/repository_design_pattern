<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RDPController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::POST('student',[RDPController::class,'create']);
Route::GET('students',[RDPController::class,'index']);
Route::GET('students/{id}',[RDPController::class,'findbyid']);
Route::PUT('studentupdate/{id}',[RDPController::class,'update']);
Route::DELETE('studentdelete/{id}',[RDPController::class,'delete']);