<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;
use Storage;
use App\User;
use App\Comment;


class VoicesController extends Controller
{
  public function add()
  {
      if (\Auth::check()) { // 認証済みの場合
      
          return view('voices.voice_create');
  }
  }

  public function store(Request $request)
  {
       $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'file' => 'required'
           
        ]);
        
              //s3アップロード開始
      $file = $request->file('file');
      
    
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('/', $file, 'public');
      
        
         $request->user()->voices()->create([
            'title' => $request->title,
            'content' => $request->content,
            'file'=>Storage::disk('s3')->url($path)
        ]);
      

      return redirect('/');
 
}
    public function voices($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

      

        // ユーザの投稿一覧を作成日時の降順で取得
        $voices = $user->voices()->orderBy('created_at', 'desc')->paginate(3);
         $user->loadRelationshipCounts() ;

        // ユーザ詳細ビューでそれらを表示
        return view('voices.show', [
            'user' => $user,
            'voices' => $voices,
        ]);
    }
    
    
  public function new()
  {
      if (\Auth::check()) { // 認証済みの場合
      
      $voices=Voice::orderBy('id', 'desc')->paginate(9);
      
    //   全ユーザーの投稿をidの新しい順にい取得
      
          return view('voices.voice_timeline',['voices'=>$voices]);
  }
  }
    
    
       public function show($id)
    //   選択したvoiceの詳細画面を表示するルーティング
    {
        // idの値でvoiceを検索して取得
        $voice = Voice::findOrFail($id);
        $user = $voice->user;
        
       

        
        

        // voice詳細ビューでそれを表示
        return view('voices.voice_show', [
            'voice' => $voice,
             'user' => $user,
          
        ]);
    }
    
       public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $voice= Voice::findOrFail($id);
        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $voice->user_id) {
            $voice->delete();
        }

        // 前のURLへリダイレクトさせる
       return redirect('/');
    }
    
    
    
    
}