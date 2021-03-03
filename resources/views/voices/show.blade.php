@extends('users.login_layout')
@section('content')

<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">{{$user->name}}</h3>
                </div>
                <div class="card-body">
                    <img src="/icon.jpg" alt="icon">
                    <p>フォロー／</p>
                     <p>フォロワー／</p>
                     <!--フォローボタンはログインした自分のページには非表示で良いため-->
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
            <a class="nav-item nav-link bg-dark active" href="#">voice</a>
         {!! link_to_route('show', 'プロフィール', ['id' => $user->id],['class' => 'nav-item nav-link bg-light']) !!}
       
            
        </nav>

<!--投稿一覧を貼り付け-->
 @include('voices.voices')
</div>


    @endsection