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
//   まだ実装できていないが、もし既にリクエストがきているユーザーにマッチング希望が出ていた場合はマッチング完了の画面を出すコードをここに
    //   if(\Auth::user()->matchings()->where('matching_id', $user)->exists() && \Auth::user()->m_requests()->where('matching_id', $user)->exists()){
      
    //  return view('users.matching_finish',['user'=>$user]);
     
    //   }else{
     
      
        return view('users.matching_page2_finish',['user'=>$user]);
    // }
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
        
           Mail::to(\Auth::user()->email)
            ->send(new ContactMail());
            
            Mail::to($user->email)
            ->send(new ContactMail());
            
            
            
            
  
      
        return view('users.matching_finish',['user'=>$user]);
        
      
}


}