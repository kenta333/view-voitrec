<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 

class UsersController extends Controller
{
     public function index()
    {
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
          return view('users.users_page', $user);
          
        }else{
          return view('welcome');
        }

        
    }
    
     public function userslist()
        {
        // ユーザ一覧をidの降順で取得
        $users = User::orderBy('id', 'desc')->paginate(5);

        // ユーザ一覧ビューでそれを表示
        return view('users.list_users', [
            'users' => $users,
        ]);
    }
    
         public function create()
    {
        if (\Auth::check()) { // 認証済みの場合
      
          return view('users.voice_create');
        }
        
    }
    
        public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
        ]);
    }

     public function edit($id)
    {
        // idの値でメッセージを検索して取得
        $user = User::findOrFail($id);

        // メッセージ編集ビューでそれを表示
        return view('users.edit', [
            'user' => $user,
        ]);
    }
    
     public function update(Request $request, $id)
    {
           // idの値でメッセージを検索して取得
        $user = User::findOrFail($id);
        // プロフィールを更新
        $user->old = $request->old;
        $user->gender = $request->gender;
        $user->like = $request->like;
        $user->free = $request->free;
        
        
        $user->save();

        // ユーザー詳細画面へリダイレクトさせる
         return redirect()->route('show', ['id' => $user]);
    }
    
}