@extends('users.login_layout')
@section('content')

<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">{{Auth::user()->name}}</h3>
                </div>
                <div class="card-body">
                    <img src="/icon.jpg" alt="icon">
                    <h5>フォロー／{!! link_to_route('users.followings', $user->followings_count, ['id' => $user->id], []) !!}</h5>
                     <h5>フォロワー／{!! link_to_route('users.followers', $user->followers_count, ['id' => $user->id], []) !!}</h5>
                     <!--フォローボタンはログインした自分のページには非表示で良いため-->
                     @if (!Auth::check())
                     @include('user_follow.follow_button')
                     @endif
                     <button type="button" class="btn btn-danger mt-2 mb-2">マッチング</button>
                {!! link_to_route('voice.add', 'voiceをアップロードする', [], ['class' => 'btn btn-outline-danger mt-2 mb-2']) !!}
                </div> 
            </div>
        </aside>
        
         
         
      
        <div class="col-sm-8">
               <nav class="nav nav-pills nav-fill mt-4">
            <a class="nav-item nav-link bg-dark active" href="#">voice</a>
            
         {!! link_to_route('show', 'プロフィール', ['id' => $user->id],['class' => 'nav-item nav-link bg-light']) !!}
       
            
        </nav>
         
   
           @if (Auth::check() && count($voices) < 1)
        <div class="profile mt-2 container welcome">
             <br><br><br>
             <h1 class="display-3 logo">voitrecへようこそ</h1>
             <br><br><br><br><br>
                {!! link_to_route('voice.add', '自分の歌声をさっそくアップロードしてみる(音声ファイル)', [], ['class' => 'btn btn-outline-info mt-2 mb-2']) !!}
                 {!! link_to_route('user.edit', 'マイプロフィールを詳しく入力する', ['id' => Auth::user()->id], ['class' => 'btn btn-info mt-2 mb-2']) !!}
                 </div>
              @endif
<!--投稿一覧を貼り付け-->
 @include('voices.voices')
       </div>
     </div>
</div>

       
     
             
    @endsection
    
