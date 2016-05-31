<?php
// modelo
$model = 'comisiones';

Route::group(['prefix' => $model], function() use($model) {

    //var controlador
    $controller = 'ComisionesController';

    Route::get('/',[
        'as' => $model.'index',
        'uses' => $controller.'@index'
    ]);


    Route::get('create',[
        'as' => $model.'create',
        'uses' => $controller.'@create'
    ]);


    Route::get('{id}/edit',[
        'as' => $model.'edit',
        'uses' => $controller.'@edit'
    ]);


    Route::post('store',[
        'as' => $model.'store',
        'uses' => $controller.'@store'
    ]);

    Route::put('{id}/update',[
        'as' => $model.'update',
        'uses' => $controller.'@update'
    ]);


    Route::post('{id}/asignar',[
        'as' => $model.'asignar',
        'uses' => $controller.'@asignarUsuarios'
    ]);

    Route::get('{id}/consultarUsuarios',[
        'as' => $model.'consultarUsuarios',
        'uses' => $controller.'@consultarUsuarios'
    ]);


    Route::post('{id}/delete',[
        'as' => $model.'delete',
        'uses' => $controller.'@delete'
    ]);

});

