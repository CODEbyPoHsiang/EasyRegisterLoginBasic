<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// 註冊api
Route::post('register', 'RegisterController@register');

// 登入 api
Route::post('login', 'LoginController@login');

Route::group(['middleware' => 'auth:api'], function () {
    // 登出 api
    Route::post('logout', 'LoginController@logout');
    // 使用者清單 api
    Route::get('list', 'LoginController@user_list');
});


/*
|--------------------------------------------------------------------------
| 修改env API
|--------------------------------------------------------------------------
*/
//檢視env清單資料
Route::get('env_list', 'EnvController@getContent');
//新增 env 資料
Route::post('env_new', 'EnvController@store');
//修改 env 資料
Route::put('env_edit', 'EnvController@update');
//刪除 env 資料
Route::delete('env_del', 'EnvController@delete');
