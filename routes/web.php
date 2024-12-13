<?php
use  App\Http\Controllers\GroupeCaseController; 
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
    return view('welcome');
});
Route::get('/acceuil', [GroupeCaseController::class, 'index'])->name('acceuil');
Route::get('/groupe-mots-ceo', [GroupeCaseController::class, 'index2'])->name('groupe-mots-ceo');
Route::get('/a-propos', [GroupeCaseController::class, 'index3'])->name('a-propos');
Route::get('/services', [GroupeCaseController::class, 'index4'])->name('services');  
Route::get('/diba-couture', [GroupeCaseController::class, 'couture'])->name('diba-couture');
Route::get('/diba-digit', [GroupeCaseController::class, 'digit'])->name('diba-digit');
Route::get('/diba-health', [GroupeCaseController::class, 'health'])->name('diba-health');
Route::get('/diba-iardt', [GroupeCaseController::class, 'iardt'])->name('diba-iardt');
Route::get('/diba-money', [GroupeCaseController::class, 'money'])->name('diba-money');
Route::get('/diba-myreport', [GroupeCaseController::class, 'myreport'])->name('diba-myreport');
Route::get('/diba-sms', [GroupeCaseController::class, 'sms'])->name('diba-sms');

