<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\EmployeeController;
use App\Http\Controllers\frontend\EmployerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes(['register' => false,]);

Route::get('/',[FrontendController::class,'index']);
Route::get('jobDetail',[FrontendController::class,'jobDetail']);
// 
Route::get('certificate',[FrontendController::class,'certificate'])->name('certificate');
Route::get('job-listing',[FrontendController::class,'jobListing']);
Route::get('employee-login',[EmployeeController::class,'employeeLoginForm'])->name('employee-login');

//Employer-------------------------------------Employer=======================================-------
//======================================================================================

Route::get('employer-login',[EmployerController::class,'employerLoginForm'])->name('employer-login');
Route::post('employer-login',[EmployerController::class,'login'])->name('login');
 Route::get('employer-account',[EmployerController::class,'employerAccount'])->name('employer-account');


//Admin Panel=================================================================
 //=========================
Route::group(['prefix'=>"admin",'as' => 'admin.','namespace' => 'App\Http\Controllers\Admin','middleware' => ['auth','AdminPanelAccess']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController')->except(['show']);

});



