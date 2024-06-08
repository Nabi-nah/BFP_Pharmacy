<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {return view('welcome');});
Route::get('/index', [ContactController::class, 'index'])->name('contacts.index'); //important

Route::middleware('auth')->group(function () {
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


Route::get('/logins', [AccountController::class, 'login'])-> name('logins');
Route::post('/account-login', [AccountController::class, 'loginAccount']) -> name('account-login');

Route::post('/import_parse', [ImportController::class, 'parseImport'])->name('import_parse');//important
Route::post('/import_process', [ImportController::class, 'processImport'])->name('import_process');//important

Route::get('/monthly-medicines', [MedicineController::class, 'monthly_medicine'])-> name('medicines.monthly-medicines');

Route::get('/upload-medicines', [MedicineController::class, 'index'])-> name('medicines.upload-medicines');
require __DIR__.'/auth.php';
