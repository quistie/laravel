<?php

use App\Http\Controllers\Bsit3Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', function () {
    return view('students');
});
Route::get('/students/create',[Bsit3Controller::class,'create'])->name('students.create');
Route::post('/students/store',[Bsit3Controller::class,'store'])->name('students.store');
Route::get('/students/index',[Bsit3Controller::class,'index'])->name('students.index');
