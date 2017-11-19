<?php

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
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {

  Route::get('/', 'RegistrationController@index');

  Route::get('/home', 'RegistrationController@show')->name('home');

  Route::get('/get/teams/{gameid}','RegistrationController@ajaxTeams');

  // Display form to register Casual
  Route::get('registercasual', 'RegistrationController@createCasual');

  // Display form to register Public
  Route::get('registerteam', 'RegistrationController@createPublic');

  // Display form to register
  Route::get('register', 'RegistrationController@create');

  // Store a new Casual
  Route::post('storecasual', 'RegistrationController@storeCasual');

  // Store a new Public
  Route::post('registerpublic', 'RegistrationController@storePublicTeam');

  // Store a new Mail invited
  Route::post('registermail', 'RegistrationController@storeMailInvite');

  // Store a new Team
  Route::post('storeteam', 'RegistrationController@storeTeam');

  Route::get('invite/{token}','RegistrationController@createMailInvite');

  Route::get('confirmation/{token}','RegistrationController@userConfirmation');

  // Show user his info
  Route::get('show', 'RegistrationController@show');

  // Show user edit screen
  Route::get('edit', 'RegistrationController@edit');


});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin', 'Admin\AdminController@index');

    Route::get('admin/statistics', 'Admin\AdminController@statistics');

    Route::get('admin/manage', 'Admin\AdminController@manage');

    Route::get('admin/manage/activity', 'Admin\AdminController@manageActivity');
    Route::post('admin/manage/activity', 'Admin\AdminController@managePostActivity');
    Route::get('admin/manage/activity/{activity_id}', 'Admin\AdminController@jsonServiceActivity');

    Route::get('admin/manage/game', 'Admin\AdminController@manageGame');
    Route::post('admin/manage/game', 'Admin\AdminController@managePostGame');
    Route::get('admin/manage/game/{game_id}', 'Admin\AdminController@jsonServiceGame');






});