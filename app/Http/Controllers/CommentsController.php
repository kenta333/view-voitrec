<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;
use App\Comment;


class CommentsController extends Controller
{
// コメントを入力したときの情報処理およびバリデーション
  public function store(Request $request,$id)
  {
     // idの値でVoiceを検索して取得
       $voice = Voice::findOrFail($id);
       
       $request->validate([
            'content' => 'required|max:255'
        ]);
            $request->user()->comments()->create([
            'content' => $request->content,
          'voice_id'=>$voice->id
        ]);
     
        
         return redirect()->action('VoicesController@show', ['id' => $voice->id]);
}
// コメントの削除ボタンを押した時の処理
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $comment = Comment::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $comment->user_id) {
            $comment->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
}