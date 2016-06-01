<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;

require (__DIR__ . '/Routes/Auth.php');

Route::group(['prefix' => '','middleware' => 'auth'], function() {
    require(__DIR__ . '/Routes/UsersRoute.php');
    require(__DIR__ . '/Routes/RolesRoute.php');
    require(__DIR__ . '/Routes/PermisosRoute.php');
    require(__DIR__ . '/Routes/PacientesRoute.php');
    require(__DIR__ . '/Routes/PsicologiaRoute.php');
    require(__DIR__ . '/Routes/ComisionesRoute.php');

});




$router->get('example', [
    'as' => 'example',
    'middleware' => 'user:admin',
    'uses' => 'HomeController@index',
]);


//Route::get('roles',function(){

/*
    $user = \app\Entities\User::find(5);


    if ($user->can('create.users'))
    {
        echo "dasdas";
    }

    //$user->attachRole(1);

  //  if ($user->is('admin')) { // you can pass an id or slug
        // or alternatively $user->hasRole('admin')
  //      dd('dasdas');
  //  }


    /*$createUsersPermission = Permission::create([
        'name' => 'Create users',
        'slug' => 'create.users',
        'description' => '', // optional
    ]);
*/
    //$role = Role::find(1);
    //$role->attachPermission(1); // permission attached to a role

   /* $adminRole = Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => '', // optional
        'level' => 1, // optional, set to 1 by default
    ]);

    $moderatorRole = Role::create([
        'name' => 'Forum Moderator',
        'slug' => 'forum.moderator',
    ]);
*/

//return view()->make('config.roles');
//
//});

Route::get('home',[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);



Route::get('testAPI',function(app\Http\Functions\ApimdsFunction  $api)
{
    $metodo     = 'getInfoPersona';
    $parametro  = '13';
    $a          =  json_decode($api->post(env('API_MDS_URL_INSOL').$metodo,$parametro));


    dd($a);

    foreach ($a as $u)
    {
      //  echo $u->solicitudId;
      //  $solicitud = json_decode($api->post(env('API_MDS_URL_INSOL').'getInfoSolicitud',$u->solicitudId));

       // dd($solicitud);
    }


});
