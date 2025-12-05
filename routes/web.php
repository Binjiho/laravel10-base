<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// main
Route::controller(\App\Http\Controllers\Main\MainController::class)->group(function () {
    Route::get('/', 'main')->name('index');
    Route::get('intro', 'intro')->name('intro');
    Route::get('main', 'main')->name('main');
    Route::post('data', 'data')->name('main.data');
});

//about M1
Route::controller(\App\Http\Controllers\About\AboutController::class)->prefix('about')->group(function () {
    Route::get('welcome', 'welcome')->name('about.welcome');
    Route::get('committee', 'committee')->name('about.committee');
    Route::get('overview', 'overview')->name('about.overview');
    Route::get('contact', 'contact')->name('about.contact');
    Route::get('news', 'news')->name('about.news');
});

//Program M2
Route::controller(\App\Http\Controllers\Program\ProgramController::class)->prefix('program')->group(function () {
    Route::get('glance', 'glance')->name('program.glance');
    Route::get('scientific', 'scientific')->name('program.scientific');
    Route::get('speaker', 'speaker')->name('program.speaker');
    Route::get('event', 'event')->name('program.event');
});

//Abstract M3
Route::controller(\App\Http\Controllers\Abstracts\AbstractsController::class)->prefix('abstract')->group(function () {
    Route::get('submission', 'submission')->name('abstract.submission');
    Route::get('awards', 'awards')->name('abstract.awards');
    Route::get('guideline', 'guideline')->name('abstract.guideline');
});

//Registration M4
Route::controller(\App\Http\Controllers\Registration\RegistrationController::class)->prefix('registration')->group(function () {
    Route::get('guideline', 'guideline')->name('registration.guideline');
    Route::get('online', 'online')->name('registration.online');
    Route::get('visa', 'visa')->name('registration.visa');
});

//accommodation M5
Route::controller(\App\Http\Controllers\Accommodation\AccommodationController::class)->prefix('accomodation')->group(function () {
    Route::get('acc', 'acc')->name('accom.acc');
});

//sponsorship M6
Route::controller(\App\Http\Controllers\Sponsorship\SponsorshipController::class)->prefix('sponsorship')->group(function () {
    Route::get('opp', 'opp')->name('sponsor.opp');
    Route::get('our', 'our')->name('sponsor.our');
});


//information M7
Route::controller(\App\Http\Controllers\Information\InformationController::class)->prefix('info')->group(function () {
    Route::get('venue', 'venue')->name('info.venue');
    Route::get('transportation', 'transportation')->name('info.transportation');
    Route::get('tour', 'tour')->name('info.tour');
    Route::get('useful', 'useful')->name('info.useful');
    Route::get('incheon', 'incheon')->name('info.incheon');
    Route::get('korea', 'korea')->name('info.korea');
});

// mypage
Route::controller(\App\Http\Controllers\Mypage\MypageController::class)->middleware('auth.check')->prefix('mypage')->group(function () {
    Route::get('/', 'index')->name('mypage');
    Route::get('personal', 'personal')->name('mypage.personal');
    Route::get('modify', 'modify')->name('mypage.modify');
    Route::get('registration', 'registration')->name('mypage.registration');
    Route::get('abstract', 'abstract')->name('mypage.abstract');

    Route::post('data', 'data')->name('mypage.data');
});

// auth
Route::prefix('auth')->group(function () {
    Route::controller(\App\Http\Controllers\Auth\AuthController::class)->group(function () {
        Route::middleware('guest')->group(function () {
            Route::match(['get', 'post'], 'signup', 'signup')->name('auth.signup');
            Route::get('complete', 'complete')->name('auth.complete');
            Route::get('forget-id', 'forgetId')->name('auth.forget-id');
            Route::get('forget-password', 'forgetPassword')->name('auth.forget-password');
        });

        Route::post('data', 'data')->name('auth.data');
    });

    Route::controller(\App\Http\Controllers\Auth\LoginController::class)->group(function () {
        Route::match(['get', 'post'], 'login', 'login')->middleware('guest')->name('login');
        Route::post('logout', 'logout')->middleware('auth.check')->name('logout');
    });
});

require __DIR__ . '/common.php';
