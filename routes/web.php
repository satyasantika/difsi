<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome2');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');
    Route::get('/password/change', [App\Http\Controllers\Auth\PasswordChangeController::class, 'showChangePasswordGet'])->name('change-password');
    Route::post('/password/change', [App\Http\Controllers\Auth\PasswordChangeController::class, 'changePasswordPost'])->name('update-password');
    Route::post('/password/reset/{id}', [App\Http\Controllers\Auth\PasswordChangeController::class, 'resetPasswordPost'])->name('reset-password');
    Route::post('/test/resume/{id}', [App\Http\Controllers\Diagnostic\ResumeController::class, 'resume'])->name('test.resume');

    Route::resources([
        'testsections' => App\Http\Controllers\Diagnostic\SectionController::class,
        // 'testevaluations' => App\Http\Controllers\EvaluationController::class,
    ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/angket', function () {
    return view('demo.angket');
});
Route::get('/hasil', function () {
    return view('demo.hasil');
});
Route::get('/diferensiasi', function () {
    return view('demo.diferensiasi');
});
