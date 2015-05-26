<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');

Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});


Route::group(array('before' => 'auth'), function() {
    // Esta será nuestra ruta de bienvenida.
    Route::resource('/', 'TiendaController');
    Route::resource('/descuentos', 'ProductoController');
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@getLogout');
});