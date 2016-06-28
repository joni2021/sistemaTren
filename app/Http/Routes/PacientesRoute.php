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

    Route::post('store',[
        'as' => $model.'store',
        'uses' => $controller.'@store'
    ]);

    Route::get('{id}/edit',[
        'as' => $model.'edit',
        'uses' => $controller.'@edit'
    ]);


    Route::post('{id}/update',[
        'as' => $model.'update',
        'uses' => $controller.'@update'
    ]);

    //derivaciones de los turnos
    Route::get('derivaciones', [

        'as' => $model.'derivaciones',
        'uses' => $controller.'@derivaciones'

    ]);

    Route::post('{id}/derivaciones', [

        'as' => $model.'derivacionesEdit',
        'uses' => $controller.'@derivacionesEdit'

    ]);

    Route::post('postDerivaciones',[

        'as' => $model.'postDerivaciones',
        'uses' => $controller.'@postDerivaciones'

    ]);

    //asignacion del turno
    Route::get('turnoAsignado', [

        'as' => $model.'turnoAsignado',
        'uses' => $controller.'@turnoAsignado'

    ]);

});

