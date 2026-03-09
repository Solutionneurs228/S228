<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/galerie', 'galerie')->name('galerie');
    Route::get('/formation', 'formation')->name('formation');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
});

/*
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
*/

Route::prefix('services')
    ->controller(ServiceController::class)
    ->group(function () {
        Route::get('/maintenance', 'maintenance')->name('services.maintenance');
        Route::get('/photographie', 'photographie')->name('services.photographie');
        Route::get('/webdev', 'webdev')->name('services.webdev');
        Route::get('/infographie', 'infographie')->name('services.infographie');
        Route::get('/assistance', 'assistance')->name('services.assistance');
    });

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store')
        ->middleware('throttle:5,1') // 5 requêtes max par minute
        ->name('contact.store');
});

/*
|--------------------------------------------------------------------------
| Devis
|--------------------------------------------------------------------------
*/

Route::controller(DevisController::class)->group(function () {
    Route::get('/devis', 'index')->name('devis');
    Route::post('/devis', 'store')->name('devis.store');
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('note', NoteController::class);
});

/*
|--------------------------------------------------------------------------
| Auth routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
