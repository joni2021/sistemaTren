<?php
// modelo
$model = 'especialidad';

Route::group(['prefix' => $model], function() use($model) {

    //var controlador
    $controller = 'EspecialidadController';

    Route::get('{id}/',[

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

    Route::get('edit',[
        'as' => $model.'edit',
        'uses' => $controller.'@edit'
    ]);


    Route::post('update',[
        'as' => $model.'update',
        'uses' => $controller.'@update'
    ]);

    Route::post('{id}/delete',[
        'as' => $model.'delete',
        'uses' => $controller.'@delete'
    ]);


});

