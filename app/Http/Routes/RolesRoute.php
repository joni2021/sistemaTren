<?php
// modelo
$model = 'roles';

Route::group(['prefix' => $model], function() use($model) {

    //var controlador
    $controller = 'RolesController';

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


});

