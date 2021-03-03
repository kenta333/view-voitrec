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
    
    
//プロフィール画面表示(ユーザー詳細)
Route::get('users/{id}', 'UsersController@show')->name('show');

//プロフィール編集画面(プロフィール編集画面)
Route::get('users/{id}/edit', 'UsersController@edit')->name('user.edit');

//プロフィール更新処理
Route::put('users/{id}', 'UsersController@update')->name('users.update');

// voice関係↓

    //voice作成画面と作成処理
    Route::group(['middleware' => ['auth']], function () {
    Route::get('voice.add', 'VoicesController@add')->name('voice.add');
    Route::post('/', 'VoicesController@store')->name('voice.store');
    
    // voice詳細画面
    Route::get('voices/{id}', 'VoicesController@voices')->name('voices.show');
    // voiceタイムラインページへのget
    Route::get('new.arrival', 'VoicesController@new')->name('new');
    // ユーザーページ上のユーザーに紐づけされたvoice一覧ページ
    Route::get('voice/{id}', 'VoicesController@show')->name('voice.show');
    });


Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users/{id}'], function () {
      
      // フォロー／解除ボタン
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        
        // フォロー／フォロワー一覧画面
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
    });
});