<?php
$model = 'insol';

    Route::group(['prefix' => $model], function() {

        $controller = 'InsolController';

        Route::get('/',[
        'as' => 'insol.pendientes',
        'uses' => $controller.'@getPendientes'
        ]);

        Route::get('/detail/{id?}',[
            'as' => 'insol.pendientes.detail',
            'uses' => $controller.'@getPendientesDetail'
        ]);

    });
