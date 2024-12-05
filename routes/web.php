<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('home', function () {
    return view('home');
});
Route::get('strategi', function () {
    return view('data-strategi');
});
Route::get('konsultasi', function () {
    return view('konsultasi');
});
Route::get('import', function () {
    return view('import');
});
Route::get('import', 
[\App\Http\Controllers\StrategiController::class, 'showImportFormStrategi'],
);
Route::post('import',
 [\App\Http\Controllers\StrategiController::class, 'import'])->name('strategi.import');
