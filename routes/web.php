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

Route::get('/', 'HomeController@top');

Route::resource('/users', 'UserController');

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function() {
  Route::get('/admin', 'UserController@admin');
  Route::get('/setting', 'UserController@setting');
  Route::resource('/posts', 'PostController');
  Route::get('/likes', 'PostController@like')->name('posts.like');
});

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');
Route::get('/privacy_policy', 'ContactController@privacy_policy')->name('contact.privacy_policy');
Route::get('/question', 'ContactController@question')->name('contact.question');

Route::group(['middleware' => ['auth']], function () {
  Route::post('ajaxlike', 'PostController@ajaxlike')->name('posts.ajaxlike');
});

Route::get('/change_email_edit', 'ChangeEmailController@edit')->name('change_email.edit');
Route::put('/change_email_update', 'ChangeEmailController@update')->name('change_email.update');
Route::get('/change_password_edit', 'ChangePasswordController@edit')->name('change_password.edit');
Route::put('/change_password_update', 'ChangePasswordController@update')->name('change_password.update');
