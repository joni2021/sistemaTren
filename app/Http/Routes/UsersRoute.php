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

    Route::post('store',[
        'as' => $model.'store',
        'uses' => $controller.'@store'
    ]);

    Route::get('delete/{id}',[
        'as' => $model.'delete',
        'uses' => $controller.'@delete'
    ]);

    Route::get('edit/{id}',[
       'as' => $model.'edit',
       'uses' => $controller.'@edit'

    ]);

    Route::post('update/{id}',[

        'as' => $model.'update',
        'uses' => $controller.'@update'
    ]);

});

