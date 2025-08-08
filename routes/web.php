<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/note', [NoteController::class, 'index'])->name('note.index');


    Route::resource('note', NoteController::class);
});



Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
})->name('admin');



Route::get('/services/mir', function () {
    return view('services/services-mir');
})->name('services/mir');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services/photographie', function () {
    return view('services/services-photographie');
})->name('services/photographie');

Route::get('/services/webdev', function () {
    return view('services/services-webdev');
})->name('services/webdev');

Route::get('/services/infographie', function () {
    return view('services/services-infographie');
})->name('services/infographie');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');

Route::get('/devis', function () {
    return view('devis');
})->name('devis');
Route::post('/devis', [DevisController::class,'store'])->name('devis.store');
// Route::redirect('/', 'home')->name('home');



Route::get('/formations/initiation-informatique', function () {
    return view('formations/formations-initiation-informatique');
})->name('formations/initiation-informatique');















// Route::middleware(['auth', 'verified'])->group(function(){
//     // Route::get('/note', [NoteController::class, 'index'])->name('note.index');


//     Route::resource('note', NoteController::class);
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::redirect('/', 'note')->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
