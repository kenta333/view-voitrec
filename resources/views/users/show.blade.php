@extends('users.login_layout')

@section('content')

<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                       @if($user->type==1)
                    <div class ="red_font">
                  [講師]
                    </div>
                    @else
                    <div class ="blue_font">
                  [一般]
                    </div>
                    @endif
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <div class="trim_slim">
                   <img src="{{$user->file}}" alt="">
                   </div>
                    <h5>フォロー／{!! link_to_route('users.followings', $user->followings_count, ['id' => $user->id], []) !!}</h5>
                     <h5>フォロワー／{!! link_to_route('users.followers', $user->followers_count, ['id' => $user->id], []) !!}</h5>
                        {!! link_to_route('users.mpage', 'マッチング', ['id' => $user->id], ['class' => 'btn btn-danger mt-2 mb-2']) !!}
                        <span class= "badge badge-pill badge-danger"> {{ $user->m_requests_count}}</span>
                        @if (Auth::id()!=$user->id)
                     @include('user_follow.follow_button')
                     @endif
                  
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
             <h1 class="display-3">{{$user->name}}</h1>
               <div class="trim">
                   <img src="{{$user->file}}" alt="">
                   </div>
             <hr width="100%">
                    @if($user->type==1)
                   <h2> <div class ="red_font">
                  [講師user]
                    </div></h2>
                    @else
                     <h2> <div class ="blue_font">
                  [一般user]
                    </div></h2>
                    
                    @endif<br>
                    
          
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
    
   