<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\View\ViewController::class, 'index'])->name('home');
Route::get('/application', [\App\Http\Controllers\View\ViewController::class, 'application'])->name('application');
Route::get('/about', [\App\Http\Controllers\View\ViewController::class, 'about'])->name('about');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('logout', function (){
    auth()->logout();
    return redirect()->route('home');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
