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

$api = app('Dingo\Api\Routing\Router');
$api->version('v1',['namespace' => 'App\Http\Controllers'], function ($api){
    $api->get('login','API\APIAuthController@login');
    $api->post('login','API\APIAuthController@login');
/*});
$api->version('v1',['middleware'=>'jwt.auth', 'namespace' => 'App\Http\Controllers'], function ($api){*/
    $api->get('users', 'API\APIAuthController@index');
    $api->post('users', 'API\APIAuthController@index');
    //$api->get('data=RekapOSS', 'API\RekapOssAPI@index');
    //$api->get('/dpmptsp/invest', 'API\RekapInvestAPI@index');
    //$api->get('/dpmptsp', 'API\RekapPerizinanAPI@index');
    $api->get('/dpmptsp', 'API\SDSControllerAPI@index');
    $api->post('logout','API\APIAuthController@logout');
});
