<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserInputController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/add-input', function () {
        return view('add-input');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    
    Route::get('/user-input', [UserInputController::class, 'index'])->name('user-input');
    Route::post('/result', [UserInputController::class, 'store'])->name('result');
    Route::get('/result/{id}', [UserInputController::class, 'show'])->name('result');


    Route::get('/edit/{id}', [UserInputController::class, 'edit'])->name('userinput.edit');
    Route::put('/result/{id}', [UserInputController::class, 'update'])->name('userinput.update');
    

    Route::delete('/user-input/{id}', [UserInputController::class, 'destroy'])->name('delete-input');
});