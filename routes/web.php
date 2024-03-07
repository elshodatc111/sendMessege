<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EskizController;


Route::get('/', function () {return view('welcome');});
Route::post('sendSms', [EskizController::class, 'SendMessege'])->name('sendSms');