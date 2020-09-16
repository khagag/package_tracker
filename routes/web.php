<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PackageController;
// use App\Http\Controllers\StateController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin login and authentication views
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('adminLogin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

//admin login and authentication functionality
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');


Route::middleware([admin::class])->group(function(){
  Route::get('/admin', 'PackageController@create');
  Route::put('/stateupdate', 'PackageController@UpdateState')->name('updateState');
  Route::get('/packages/search','PackageController@search')->name('packages.search');
  Route::post('/packages/search','PackageController@searchRes')->name('packages.search');
  Route::resources([
      'packages' => PackageController::class,
      'states' => StateController::class,
  ]);
});

Route::group(['middleware' => ['auth']],function(){
  //client Routes
  Route::get('/packages/search','PackageController@search')->name('packages.search');
  Route::get('/packages/{package}','PackageController@show')->name('packages.show');
  Route::post('/packages/search','PackageController@searchRes')->name('packages.search');

  Route::get('client/','ClientController@getPackage')->name('getPackage');
  Route::get('client/package','ClientController@showPackage')->name('showPackage');
  Route::post('client/package','ClientController@RetrivePackage')->name('RetrivePackage');
});
