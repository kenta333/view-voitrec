<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class MatchingController extends Controller
{
        public function store($id)
    {
   
        // 認証済みユーザ（閲覧者）が、 idのユーザをマッチング希望する
        \Auth::user()->matching($id);
        $user = User::findOrFail($id);
      
      
//   既にマッチング希望されていたユーザーに希望を出した場合はマッチング成立なので成立画面へ遷移する。
      if($user->is_matching(\Auth::id())){
         
      
   return redirect()->action('MatchingController@matching_done',['id' => $user]);
     
      }else{
     
      
        return view('users.matching_page2_finish',['user'=>$user]);
    }
    }
       public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをマッチング拒否する
        
        $user = User::findOrFail($id);
        
        $user->unmatching(\Auth::user());
        
        // 前のURLへリダイレクトさせる
        return back();
    }
    
           public function matching_canceled($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザへのマッチング希望を取り消す
        
        $user = User::findOrFail($id);
        
        \Auth::user()->unmatching($user);
        
        // 前のURLへリダイレクトさせる
        return back();
    }

public function matching_done($id)
{
    
      // 認証済みユーザ（閲覧者）が、 idのユーザをマッチング希望する
        \Auth::user()->matching($id);
        $user = User::findOrFail($id);
        $auth= \Auth::user();
        
        
           Mail::to(\Auth::user()->email)
            ->send(new ContactMail());
            
            Mail::to($user->email)
            ->send(new ContactMail());
            
                // ここの処理の時に両ユーザーの中間テーブルを削除する
        // (マッチングユーザーのidだけを除いて)

        
            
        return view('users.matching_finish',['user'=>$user]);
        
      
}


}