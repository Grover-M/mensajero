<?php
//Route::get('/', function () { return redirect('/admin/home'); })->middleware('authNino');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login')->middleware('authNino');
$this->post('login', 'Auth\LoginController@login')->name('auth.login')->middleware('authNino');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout')->middleware('authNino');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('abilities', 'Admin\AbilitiesController');
    Route::post('abilities_mass_destroy', ['uses' => 'Admin\AbilitiesController@massDestroy', 'as' => 'abilities.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});
//Rutas de login nino
Route::get('/lognino', 'NinoController@index')->middleware('authNino');
route::post('lognino','NinoController@principal');
route::get('/registro/nino','NinoController@registro')->middleware('authNino');
route::post('/registro/nino','NinoController@registrado');
Route::get('/main/nino','NinoController@main')->middleware('nloged');
Route::get('/logout','NinoController@logout');


Route::get('/','InicioController@pantallaInicio');
Route::get('/log','InicioController@login' );

Route::resource('/cartas','CartaController');