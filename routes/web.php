<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\View\ViewController::class, 'index'])->name('home');
Route::get('/application', [\App\Http\Controllers\View\ViewController::class, 'application'])->name('application');
Route::get('/about', [\App\Http\Controllers\View\ViewController::class, 'about'])->name('about');
Route::post('/app', [\App\Http\Controllers\AppController::class, 'store'])->name('app');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('logout', function (){
    auth()->logout();
    return redirect()->route('home');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::name('dash.')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');
    });

    Route::name('country.')->group(function () {
        Route::get('/country', [\App\Http\Controllers\Admin\CountryController::class, 'index'])->name('index');
        Route::post('/country', [\App\Http\Controllers\Admin\CountryController::class, 'store'])->name('store');
    });
    Route::name('states.')->group(function () {
        Route::get('/states', [\App\Http\Controllers\Admin\StatesController::class, 'index'])->name('index');
        Route::post('/states', [\App\Http\Controllers\Admin\StatesController::class, 'store'])->name('store');
    });
    Route::name('city.')->group(function () {
        Route::get('/city', [\App\Http\Controllers\Admin\SitiesController::class, 'index'])->name('index');
        Route::post('/city', [\App\Http\Controllers\Admin\SitiesController::class, 'store'])->name('store');
    });
});

require __DIR__.'/auth.php';
