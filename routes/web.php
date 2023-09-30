<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Academics\AcademicAperAController;
use App\Http\Controllers\Academics\AcademicAperBController;
use App\Http\Controllers\Academics\AcademicAperCController;
use App\Http\Controllers\Academics\AcademicAperDController;
use App\Http\Controllers\Academics\AcademicAperEController;
use App\Http\Controllers\Senior\SeniorAperAController;
use App\Http\Controllers\Senior\SeniorAperBController;
use App\Http\Controllers\Senior\SeniorAperCController;
use App\Http\Controllers\Senior\SeniorAperDController;
use App\Http\Controllers\Senior\SeniorAperEController;
use App\Http\Controllers\Junior\JuniorAperAController;
use App\Http\Controllers\Junior\JuniorAperBController;
use App\Http\Controllers\Junior\JuniorAperCController;
use App\Http\Controllers\Junior\JuniorAperDController;
use App\Http\Controllers\Junior\JuniorAperEController;

//use journal...
use App\Http\Controllers\Journal\JournalCategoryController;
use App\Http\Controllers\Journal\JournalVolumeController;
use Spatie\Permission\Contracts\Role;

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

Auth::routes();



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::get('/adduser/{id}',[RoleController::class, 'adduser'])->name('roles.adduser');
    Route::get('/updateuserrole',[RoleController::class, 'updateuserrole'])->name('roles.updateuserrole');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    //journal routes...
    Route::resource('journalcategory', JournalCategoryController::class);
    Route::resource('journalvolume', JournalvolumeController::class);

    Route::resource('academic_aper_part_a', AcademicAperAController::class);
    Route::resource('academic_aper_part_b', AcademicAperBController::class);
    Route::resource('academic_aper_part_c', AcademicAperCController::class);
    Route::resource('academic_aper_part_d', AcademicAperDController::class);
    Route::resource('academic_aper_part_e', AcademicAperEController::class);

    Route::resource('senior_aper_part_a', SeniorAperAController::class);
    Route::resource('senior_aper_part_b', SeniorAperBController::class);
    Route::resource('senior_aper_part_c', SeniorAperCController::class);
    Route::resource('senior_aper_part_d', SeniorAperDController::class);
    Route::resource('senior_aper_part_e', SeniorAperEController::class);

    Route::resource('junior_aper_part_a', JuniorAperAController::class);
    Route::resource('junior_aper_part_b', JuniorAperBController::class);
    Route::resource('junior_aper_part_c', JuniorAperCController::class);
    Route::resource('junior_aper_part_d', JuniorAperDController::class);
    Route::resource('junior_aper_part_e', JuniorAperEController::class);


});
