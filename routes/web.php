<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Admin\EnrollmentAdminController;
use App\Http\Controllers\Admin\CourseAdminController;
use App\Http\Middleware\CourseAccess;

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
| Routes Publiques - Catalogue
|--------------------------------------------------------------------------
*/
Route::get('/formations', [CourseController::class, 'index'])->name('courses.index');
Route::get('/formations/{slug}', [CourseController::class, 'show'])->name('courses.show');

/*
|--------------------------------------------------------------------------
| Routes Authentifiées - Inscriptions
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'throttle:enrollment'])->group(function () {
    Route::post('/formations/{course}/inscription', [EnrollmentController::class, 'store'])
        ->name('courses.enroll')
        ->can('enroll', 'course');
    
    Route::delete('/formations/{course}/inscription', [EnrollmentController::class, 'destroy'])
        ->name('courses.unenroll');
});
Route::middleware(['web', 'auth'])->prefix('formations')->name('learning.')->group(function () {
    
    Route::get('{course}/inscription', [EnrollmentController::class, 'create'])
        ->name('enrollments.create');
    
    Route::post('{course}/inscription', [EnrollmentController::class, 'store'])
        ->name('enrollments.store');
        
});
/*
|--------------------------------------------------------------------------
| Routes Apprentissage (Protégées par accès formation)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', CourseAccess::class])->group(function () {
    // Tableau de bord
    Route::get('/formations/{course}/apprendre', [LearningController::class, 'index'])
        ->name('courses.learn');
    
    // Leçon individuelle
    Route::get('/formations/{course}/apprendre/{module}/{lesson}', [LearningController::class, 'show'])
        ->name('courses.lesson');
    
    // API Progression
    Route::post('/formations/{course}/apprendre/{module}/{lesson}/complete', [LearningController::class, 'complete']);
});

/*
|--------------------------------------------------------------------------
| Routes Quiz (Protégées + validation module complété)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'course.access:quiz', 'throttle:quiz'])->group(function () {
    Route::get('/formations/{course}/quiz/{module}', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/formations/{course}/quiz/{module}/start', [QuizController::class, 'start'])->name('quiz.start');
    Route::get('/formations/{course}/quiz/{module}/take/{result}', [QuizController::class, 'take'])->name('quiz.take');
    Route::post('/formations/{course}/quiz/{module}/submit/{result}', [QuizController::class, 'submit'])->name('quiz.submit');
    Route::get('/formations/{course}/quiz/{module}/result/{result}', [QuizController::class, 'result'])->name('quiz.result.show');
});

/*
|--------------------------------------------------------------------------
| API Interne
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'throttle:api'])->prefix('api')->group(function () {
    Route::post('/lessons/{lesson}/track-time', [LearningController::class, 'trackTime']);
});

/*
|--------------------------------------------------------------------------
| Admin - Gestion des formations
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Gestion inscriptions
    Route::get('/inscriptions', [EnrollmentAdminController::class, 'index'])->name('enrollments.index');
    Route::post('/inscriptions/{enrollment}/approuver', [EnrollmentAdminController::class, 'approve'])->name('enrollments.approve');
    Route::post('/inscriptions/{enrollment}/refuser', [EnrollmentAdminController::class, 'reject'])->name('enrollments.reject');
    Route::post('/inscriptions/{enrollment}/suspendre', [EnrollmentAdminController::class, 'suspend'])->name('enrollments.suspend');
    Route::post('/inscriptions/{enrollment}/reactiver', [EnrollmentAdminController::class, 'reactivate'])->name('enrollments.reactivate');
    
    // Gestion formations (CRUD)
    Route::resource('formations', CourseAdminController::class);
});






// Route temporaire pour tester
Route::get('/login-test', function () {
    return view('auth.login'); // ou juste un formulaire simple
});
Route::get('/logout-manuel', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
});

/*
|--------------------------------------------------------------------------
| Auth routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
