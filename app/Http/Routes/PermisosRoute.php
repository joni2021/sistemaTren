<?php
// modelo
$model = 'permisos';

Route::group(['prefix' => $model], function() use($model) {

    //var controlador
    $controller = 'PermisosController';

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

