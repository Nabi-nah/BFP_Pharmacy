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
//Route::get('/', function () {return view('welcome');});
Route::get('/index', [ContactController::class, 'index'])->name('contacts.index'); 

//Route::get('/bfp', function () {return view('home');});
/* Not ours
Route::middleware('auth')->group(function () {
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
*/

Route::get('/BFP', [AccountController::class, 'publicLogin'])-> name('bfp'); 
Route::get('/BFP-AboutUs', [AccountController::class, 'aboutUs'])-> name('about');
Route::get('/BFP-Directory', [AccountController::class, 'directory'])-> name('directory');


Route::get('/', [AccountController::class, 'login'])-> name('logins') -> middleware('AlreadyLoggedIn');
Route::post('/account-login', [AccountController::class, 'loginAccount']) -> name('account-login')-> middleware('LoggedIn');

Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
Route::get('/edit-profile/{id}', [AccountController::class, 'edit_profile'])->name('edit-profile');
Route::post('/update-profile/{id}', [AccountController::class, 'update_profile'])->name('update');

Route::get('logouts',[AccountController::class, 'logout'])->name('logout') -> middleware('isLoggedIn');

Route::post('/import_parse', [ImportController::class, 'parseImport'])->name('import_parse');
Route::post('/import_process', [ImportController::class, 'processImport'])->name('import_process');

Route::get('/monthly-medicines', [MedicineController::class, 'monthly_medicine'])-> name('medicines.monthly-medicines');
Route::get('/monthly-medicines-uniformed', [MedicineController::class, 'monthly_medicine_uniformed'])-> name('medicines.monthly-medicines-uniformed');
Route::get('/monthly-medicines-nonuniformed', [MedicineController::class, 'monthly_medicine_nonuniformed'])-> name('medicines.monthly-medicines-nonuniformed');
Route::get('/monthly-medicines-civilian', [MedicineController::class, 'monthly_medicine_civilian'])-> name('medicines.monthly-medicines-civilian');
Route::get('/monthly-medicines-dependent', [MedicineController::class, 'monthly_medicine_dependent'])-> name('medicines.monthly-medicines-dependent');
Route::get('/monthly-medicines-retired', [MedicineController::class, 'monthly_medicine_retired'])-> name('medicines.monthly-medicines-retired');

Route::get('/upload-medicines', [MedicineController::class, 'index'])-> name('medicines.upload-medicines');
Route::get('/database-medicines', [MedicineController::class, 'database'])-> name('medicines.monthly-database');
require __DIR__.'/auth.php';
