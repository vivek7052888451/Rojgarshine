<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

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


Auth::routes();

Route::get('/',[FrontendController::class,'index']);
Route::get('jobDetail',[FrontendController::class,'jobDetail']);
Route::get('employer-account',[FrontendController::class,'employerAccount']);
Route::get('employer-login',[FrontendController::class,'employerLogin']);
Route::get('job-listing',[FrontendController::class,'jobListing']);



Route::group(['prefix'=>"admin",'as' => 'admin.','namespace' => 'App\Http\Controllers\Admin','middleware' => ['auth','AdminPanelAccess']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController')->except(['show']);

});



