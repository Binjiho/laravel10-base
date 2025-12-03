<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// main
Route::controller(\App\Http\Controllers\Admin\Main\MainController::class)->group(function () {
    Route::get('/', 'main')->name('main');
    Route::post('data', 'data')->name('main.data');
});

// member
Route::controller(\App\Http\Controllers\Admin\Member\MemberController::class)->prefix('member')->group(function() {
    Route::get('/', 'index')->name('member');
    Route::get('domestic', 'index')->name('member.domestic');
    Route::get('overseas', 'index')->name('member.overseas');
    Route::get('withdrawal', 'index')->name('member.withdrawal');
    Route::get('modify/{sid}', 'modify')->name('member.modify');
    Route::get('{case}/exception-date', 'exceptionDate')->where('case', 'multi|one')->name('member.exception-date');

    Route::get('excel', 'excel')->name('member.excel');
    Route::post('data', 'data')->name('member.data');
});

//// registration
//Route::controller(\App\Http\Controllers\Admin\Registration\RegistrationController::class)->prefix('registration')->group(function() {
//    Route::get('/', 'index')->name('registration');
//    Route::get('/individual', 'index')->name('registration.individual');
//    Route::get('/group', 'index')->name('registration.group');
//
//    Route::get('withdrawal', 'index')->name('registration.withdrawal');
//    Route::get('modify/{sid}', 'modify')->name('registration.modify');
//    Route::get('receipt/{sid}', 'receipt')->name('registration.receipt');
//    Route::get('popup/memo/{sid}', 'memo')->name('registration.memo');
//
//    Route::get('excel', 'excel')->name('registration.excel');
//    Route::get('custom-excel', 'customExcel')->name('registration.custom-excel');
//    Route::post('data', 'data')->name('registration.data');
//});
//
//// abstract
//Route::controller(\App\Http\Controllers\Admin\Abstracts\AbstractController::class)->prefix('abstract')->group(function() {
//    Route::get('/', 'index')->name('abstract');
//    Route::get('withdrawal', 'index')->name('abstract.withdrawal');
//    Route::get('resend-mail/{sid}', 'resendMail')->name('abstract.resend-mail');
//    Route::get('result-mail/{sid}', 'resultMail')->name('abstract.result-mail');
//    Route::get('result-multiple-mail', 'resultMultipleMail')->name('abstract.result-multiple-mail');
//    Route::get('modify/{sid}/{step}', 'modify')
//        ->where('step', 'step01|step02|step03|step04')
//        ->name('abstract.modify');
//
//    Route::get('excel', 'excel')->name('abstract.excel');
//    Route::get('word', 'word')->name('abstract.word');
//    Route::get('word/preview', 'wordPreview')->name('abstract.word.preview');
//    Route::post('data', 'data')->name('abstract.data');
//});


// 접속통계
Route::controller(\App\Http\Controllers\Admin\Stat\StatController::class)->prefix('stat')->group(function () {
    Route::get('/', 'index')->name("stat");
    Route::get('referer', 'referer')->name("stat.referer");
    Route::get('data', 'data')->name("stat.data");
});

// auth
Route::controller(\App\Http\Controllers\Admin\Auth\LoginController::class)->prefix('auth')->group(function () {
    Route::post('logout', 'logout')->name('logout');
});

require __DIR__ . '/common.php';
