<?php
// modelo
$model = 'agenda';

Route::group(['prefix' => $model], function() use($model) {

    //var controlador
    $controller = 'AgendaController';

    Route::get('/',[
        'as' => $model.'index',
        'uses' => $controller.'@index'
    ]);

    Route::post('/',[
        'as' => $model.'selectComision',
        'uses' => $controller.'@index'
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

    Route::post('{id}/delete',[
        'as' => $model.'delete',
        'uses' => $controller.'@delete'
    ]);

});

