<?php
// modelo
$model = 'users';

Route::group(['prefix' => $model], function() use($model) {

    //var controlador
    $controller = 'UsersController';

    Route::get('/',[
        'as' => $model.'index',
        'uses' => $controller.'@index'
    ]);


    Route::get('create',[
        'as' => $model.'create',
        'uses' => $controller.'@create'
    ]);


});

