@extends('users.login_layout')

@section('content')

<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img src="/icon.jpg" alt="icon">
                    <h5>フォロー／{!! link_to_route('users.followings', $user->followings_count, ['id' => $user->id], []) !!}</h5>
                     <h5>フォロワー／{!! link_to_route('users.followers', $user->followers_count, ['id' => $user->id], []) !!}</h5>
                         @if (Auth::id()!=$user->id)
                     @include('user_follow.follow_button')
                     @endif
                     <button type="button" class="btn btn-danger mt-2 mb-2">マッチング</button>
                     @if (Auth::id()==$user->id)
                     {!! link_to_route('voice.add', 'voiceをアップロードする', [], ['class' => 'btn btn-outline-danger mt-2 mb-2']) !!}
                     @endif
                </div> 
            </div>
        </aside>
        <div class="col-sm-8">
               <nav class="nav nav-pills nav-fill mt-4">
                   <!--↓今はログインユーザーのvoice一覧に飛んでしまうが後々voicecontrollerで指定ユーザーの投稿のみ表示するルーティングを作成する-->
           {!! link_to_route('voices.show', 'voice', ['id' => $user->id],['class' => 'nav-item nav-link bg-light']) !!}
             <a class="nav-item nav-link  bg-dark active" href="#">プロフィール</a>
             
        </nav>
     <div class="profile mt-2 container">
         <div class="jumbotron">
             <h1 class="display-3">プロフィール</h1>
             <p class="lead">ユーザー名：{{$user->name}}<br>
             ユーザータイプ：{{$user->type}}<br>
             性別：{{$user->gender}}<br>
             年齢：{{$user->old}}<br>
             好きなアーティスト：{{$user->like}}<br>
             自己紹介：{{$user->free}}<br>
             
             
             
             </p>
             <!--編集ボタンはログインユーザーが自分のページを表示したときにしか表示させない-->
              @if (Auth::id()==$user->id)
              {!! link_to_route('user.edit', 'プロフィール編集', ['id' => Auth::user()->id], ['class' => 'btn btn-outline-danger mt-2 mb-2']) !!}
              @endif
             
         </div>
     </div>


    @endsection
    
   