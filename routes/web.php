<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::middleware(['auth'])->group(function () {

    Route::resource('jobs', JobController::class);

});