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
Route::get('/', 'UsersController@index');


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//ログインuserのトップ画面(マイページ)
  Route::get('users', 'UsersController@index')->name('index');

    
    //一般user一覧
    Route::get('users.list', 'UsersController@userslist')->name('users.list');
    
    //voice作成画面(後々にvoiceテーブルを作成した際にVoiceコントローラーで処理する。)
    Route::get('voice.create', 'UsersController@create')->name('voice.create');
    
//プロフィール画面表示(ユーザー詳細)
Route::get('users/{id}', 'UsersController@show')->name('show');

//プロフィール編集画面(プロフィール編集画面)
Route::get('users/{id}/edit', 'UsersController@edit')->name('user.edit');

//プロフィール更新処理
Route::put('users/{id}', 'UsersController@update')->name('users.update');
