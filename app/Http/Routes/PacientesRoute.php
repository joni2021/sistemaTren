<?php
// modelo
$model = 'pacientes';

Route::group(['prefix' => $model], function() use($model) {

    //var controlador
    $controller = 'PacientesController';

    Route::get('/',[
        'as' => $model.'index',
        'uses' => $controller.'@index'
    ]);

    Route::get('create',[
        'as' => $model.'create',
        'uses' => $controller.'@create'
    ]);

    Route::get('store',[
        'as' => $model.'store',
        'uses' => $controller.'@store'
    ]);

    Route::get('edit',[
        'as' => $model.'edit',
        'uses' => $controller.'@edit'
    ]);


    Route::post('update',[
        'as' => $model.'update',
        'uses' => $controller.'@update'
    ]);


});

