<?php

use App\Http\Controllers\TestModelController;
use App\Models\TestModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('test', TestModelController::class);