<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// $api = app('Dingo\Api\Routing\Router');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::get('hello','homeController@index');
// $api->version('v1',function($api){
// 	$api->get('hello',function(){
// 		return "hello";
// 	});
// });
Route::get('users/{user_id}/roles/{role_name}', 'homeController@attachUserRole');
Route::get('users/{user_id}/roles','homeController@getUserRole');
Route::post('role/permission/add', 'homeController@attachPermission');
Route::get('role/{user_name}/permissions', 'homeController@getPermissions');