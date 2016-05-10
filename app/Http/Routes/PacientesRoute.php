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


});

