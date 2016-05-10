<?php


Route::group(['prefix' => ''], function() {

        Route::get('', [
            'as' => 'auth.login',
            'uses' => 'LoginController@getLogin'
        ]);

        Route::post('login',[
            'as' => 'auth.authenticate',
            'uses' => 'LoginController@authenticate'
        ]);


    Route::get('logout', [
        'as' => 'auth.logout',
        'uses' => 'LoginController@logout',
        'middleware' => 'auth'
    ]);

});
