<?php

use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\WebsiteController;

use App\Http\Controllers\OverviewController;


use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Journal\AuthorController;
use App\Http\Controllers\Apps\MyJournalsController;
use App\Http\Controllers\Journal\JournalController;




use App\Http\Controllers\Journal\PublishController;
use App\Http\Controllers\Junior\JuniorAperAController;
use App\Http\Controllers\Junior\JuniorAperBController;
use App\Http\Controllers\Junior\JuniorAperCController;
use App\Http\Controllers\Junior\JuniorAperDController;
use App\Http\Controllers\Junior\JuniorAperEController;


use App\Http\Controllers\Senior\SeniorAperAController;
use App\Http\Controllers\Senior\SeniorAperBController;
use App\Http\Controllers\Senior\SeniorAperCController;
use App\Http\Controllers\Senior\SeniorAperDController;
use App\Http\Controllers\Senior\SeniorAperEController;

//use journal...
use App\Http\Controllers\Journal\JournalYearController;
use App\Http\Controllers\Journal\JournalVolumeController;
use App\Http\Controllers\Academics\AcademicAperAController;

//user apps
use App\Http\Controllers\Academics\AcademicAperBController;

use App\Http\Controllers\Academics\AcademicAperCController;
use App\Http\Controllers\Academics\AcademicAperDController;
use App\Http\Controllers\Academics\AcademicAperEController;
use App\Http\Controllers\Journal\JournalCategoryController;
use App\Http\Controllers\PublishController as ControllersPublishController;

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

Route::get('/',[WebsiteController::class, 'index'])->name('home');
Route::get('/mission',[WebsiteController::class, 'mission'])->name('mission');
Route::get('/conference',[WebsiteController::class, 'conference'])->name('conference');
Route::get('/editors',[WebsiteController::class, 'editors'])->name('editors');
Route::get('/contact',[WebsiteController::class, 'contact'])->name('contact');
Route::get('/journal',[WebsiteController::class, 'journals'])->name('journals');
Route::get('/submission',[WebsiteController::class, 'submission'])->name('submission');
Route::get('/journalcategory/{id}',[WebsiteController::class, 'journalcategory'])->name('journalcategory');
Route::get('/viewjournal/{journalid}',[WebsiteController::class, 'viewpaper'])->name('viewjournal');


Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::resource('biodata', BiodataController::class);

    Route::get('/overview/{id}',[OverviewController::class, 'show'])->name('user.overview');
    Route::get('/settings/{id}',[BiodataController::class, 'show'])->name('user.settings');
    Route::post('ajaxemailupdate', [BiodataController::class, 'ajaxemailupdate']);
    Route::post('ajaxpasswordupdate', [BiodataController::class, 'ajaxpasswordupdate']);
    Route::resource('permissions', PermissionController::class);
    Route::get('/adduser/{id}',[RoleController::class, 'adduser'])->name('roles.adduser');
    Route::get('/updateuserrole',[RoleController::class, 'updateuserrole'])->name('roles.updateuserrole');
    Route::get('/userid/{userid}/roleid/{roleid}',[RoleController::class, 'removeuserrole'])->name('roles.removeuserrole');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    //journal routes...
    Route::resource('paperpublishing', PublishController::class);
    Route::resource('journalcategory', JournalCategoryController::class);
    Route::resource('journalvolume', JournalVolumeController::class);
    Route::resource('journalyear', JournalYearController::class);

    Route::resource('authors', AuthorController::class);
    Route::resource('alljournals', JournalController::class);
    Route::get('/review/{id}',[AuthorController::class, 'showreview'])->name('author.review');
    Route::get('/journal/{id}',[AuthorController::class, 'showjournal'])->name('author.journal');
    Route::get('/viewjournal/{id}',[AuthorController::class, 'viewpaper'])->name('author.viewpaper');

    //journal publishing
    Route::resource('publishing', PublishController::class);

    //user apps routes
    Route::resource('myjournals', MyJournalsController::class);
    Route::get('/journalid/{journalid}',[MyJournalsController::class, 'deletejournal'])->name('myjournal.deletejournal');
    Route::get('/viewpaper/{journalid}',[MyJournalsController::class, 'viewpaper'])->name('myjournal.viewpaper');





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
