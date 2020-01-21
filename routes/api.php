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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/simpeg', 'Sekretariat\DataAsnController@simpeg');
Route::get('/realisasi', 'API\ApiCJIP@cjip');
Route::get('/satgas', 'API\SatgasAPIController@satgas');

Route::get('/satgas_sektor', 'API\SatgasSektorAPIController@satgas');
Route::post('/laporSatgas', 'API\LaporSatgasAPIController@LaporSatgas');


$api = app('Dingo\Api\Routing\Router');
$api->version('v1',['namespace' => 'App\Http\Controllers'], function ($api){
    $api->get('login','API\APIAuthController@login');
    $api->post('login','API\APIAuthController@login');
    $api->get('users', 'API\APIAuthController@index');
    $api->post('users', 'API\APIAuthController@index');
    $api->get('/dpmptsp', 'API\SDSControllerAPI@index');
    $api->post('logout','API\APIAuthController@logout');
});
