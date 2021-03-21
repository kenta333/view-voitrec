<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;
use Storage;
use App\User;
use App\Comment;


class VoicesController extends Controller
{
    // voice新規作成画面表示
  public function add()
  {
      if (\Auth::check()) { // 認証済みの場合
      return view('voices.voice_create');
  }
}
// voice作成にあたっての必要情報処理
  public function store(Request $request)
  {
    //   バリデーション１
       $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
           
        ]);
        
        
        
              //s3アップロード開始
            //   ファイルのアップロード処理
      $file = $request->file('file');
      if(isset($file)){
    
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('/', $file, 'public');
          $request->user()->voices()->create([
           'file'=>Storage::disk('s3')->url($path),
              'title' => $request->title,
            'content' => $request->content,
           
            ]);
      
      }
    // youtube_urlの送信処理
       $youtube =$request->youtube_url;
         if(isset($youtube)){
         $request->user()->voices()->create([
            'title' => $request->title,
            'content' => $request->content,
            'youtube_url' =>$youtube
        ]);
         }
         //   バリデーション２
          if (is_null($request['file']) || is_null($request['youtube_url'])) {
            // youtube_urlの入力かファイルのアップロードのどちらかをしなければバリデーションエラーの表示を出す
            if (is_null($request['file'])) {
                 $request->validate(['youtube_url' => 'required']);
                 $request->validate(['file' => '']);
            }
         
            if (is_null($request['youtube_url'])) {
               $request->validate(['file' => 'required']);
                 $request->validate(['youtube_url' => '']);
            }
        
          }
          

      return redirect('/');
 
}
// ユーザーページ上のvoiceタブを押した際の画面表示(各ユーザーvoice一覧)
    public function voices($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

      

        // ユーザの投稿一覧を作成日時の降順で取得
        $voices = $user->voices()->orderBy('created_at', 'desc')->paginate(3);
         $user->loadRelationshipCounts() ;
         
                 
    //   マッチングボタン制御用(画面左側のカード上に表示)
  $auth_user = \Auth::user();
            $userIds = $auth_user->matchings()->pluck('users.id')->toArray();
       //相互マッチング中のユーザを取得
        $matching_each = $auth_user->m_requests()->whereIn('users.id', $userIds)->pluck('users.id')->toArray();
       //相互マッチング中のユーザを返す
        

        // ユーザ詳細ビューでそれらを表示
        return view('voices.show', [
            'user' => $user,
            'voices' => $voices,
               'matching_each'=>$matching_each
        ]);
    }
    
    // 全ユーザーの投稿一覧表示
  public function new()
  {
      if (\Auth::check()) { // 認証済みの場合
      
      $voices=Voice::orderBy('id', 'desc')->paginate(9);
      
    //   全ユーザーの投稿をidの新しい順にい取得
      
          return view('voices.voice_timeline',['voices'=>$voices]);
  }
  }
    
    //   選択したvoiceの詳細画面を表示
       public function show($id)
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
    
    // voiceの削除ボタンを押した時の処理
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