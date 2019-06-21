<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group([ 'namespace' => 'M',], function () {
    # 后端示例路由
    Route::get('/', 'HomeController@index');
    Route::get('goods/{id}', 'GoodController@index');

    Route::get('login', 'UserController@login');
    Route::post('login', 'UserController@dologin');
    Route::get('regist', 'UserController@regist');
    Route::post('regist', 'UserController@doregist');
    Route::post('regist/getcode', 'UserController@registcode'); //获取验证码
    Route::post('regist/has_phonenumber', 'UserController@has_phonenumber'); //获取验证码

    //分类
    Route::get('fenlei','GoodController@fenlei');
    //活动
    Route::get('active/{id}','ActiveController@index');


    Route::get('search','SearchController@index');
    //用户
    Route::get('user', 'UserController@index'); //个人中心
    Route::get('user/myuser', 'UserController@myuser'); //我的会员
    Route::get('user/youhuiquan', 'UserController@youhuiquan'); //优惠券
    Route::get('user/help', 'UserController@help'); //帮助中心
    Route::get('user/address', 'UserController@address'); //地址页面
    Route::get('user/qiandao', 'UserController@qiandao'); //签到页面
});

