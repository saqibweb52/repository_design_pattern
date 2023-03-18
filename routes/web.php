<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RDPController;


Route::get('/',[RDPController::class,'index'])->name('index');
Route::POST('students',[RDPController::class,'create']);
Route::GET('student/{id}',[RDPController::class,'findbyid']);
Route::PUT('student/{id}',[RDPController::class,'update'])->name('update');
Route::GET('studentdelete/{id}',[RDPController::class,'delete']);