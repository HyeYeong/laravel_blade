<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/contact', [FormController::class, 'showForm']); // form view
Route::post('/contact', [FormController::class, 'submitForm']); // form submit