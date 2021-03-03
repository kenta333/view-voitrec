<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 

class UsersController extends Controller
{
     public function index()
    {
        $data = [];
        
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            
            $voices = $user->voices()->orderBy('created_at', 'desc')->paginate(3);
             $user->loadRelationshipCounts() ;
            
               $data = [
                'user' => $user,
                'voices' => $voices,
            ];
            
          return view('users.users_page', $data);
          
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
    
    
        public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
         $user->loadRelationshipCounts() ;

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
    
    // フォロー機能・フォロー／フォロワー一覧表示
    // 中略

    /**
     * ユーザのフォロー一覧ページを表示するアクション。
     *
     * @param  $id  ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function followings($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();

        // ユーザのフォロー一覧を取得
        $followings = $user->followings()->paginate(5);

        // フォロー一覧ビューでそれらを表示
        return view('users.followings', [
            'user' => $user,
            'users' => $followings,
        ]);
    }

    /**
     * ユーザのフォロワー一覧ページを表示するアクション。
     *
     * @param  $id  ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function followers($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();

        // ユーザのフォロワー一覧を取得
        $followers = $user->followers()->paginate(5);

        // フォロワー一覧ビューでそれらを表示
        return view('users.followers', [
            'user' => $user,
            'users' => $followers,
        ]);
    }
}
    
