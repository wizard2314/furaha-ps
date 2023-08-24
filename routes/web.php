<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::any('/', [EventController::class, 'index'])->name('index');

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/news', [EventController::class, 'allEvents'])->name('news');

Route::get('/create-event', function () {
    return view('events.event');
});

Route::post('/events/store', [EventController::class, 'store'])->name('events.store');

Route::get('events/{id}', [EventController::class, 'single'])->name('events.single');

Route::get('/long-courses', function () {
    return view('courses.long');
})->name('courses.long');

Route::get('/short-courses', function () {
    return view('courses.short');
})->name('courses.short');

Route::get('/application form', [FormController::class, 'download'])->name('formdownload');