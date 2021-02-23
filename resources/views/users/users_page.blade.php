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
                    <p>フォロー／</p>
                     <p>フォロワー／</p>
                     <!--フォローボタンはログインした自分のページには非表示で良いため-->
                     @if (!Auth::check())
                     <button type="button" class="btn btn-dark mt-2 mb-2">フォローする</button>
                     @endif
                     <button type="button" class="btn btn-danger mt-2 mb-2">マッチング</button>
                {!! link_to_route('voice.create', 'voiceをアップロードする', [], ['class' => 'btn btn-outline-danger mt-2 mb-2']) !!}
                </div> 
            </div>
        </aside>
        
      
         
         
        
        <div class="col-sm-8">
               <nav class="nav nav-pills nav-fill mt-4">
            <a class="nav-item nav-link bg-dark active" href="#">voice</a>
              @if (Auth::check())
         {!! link_to_route('show', 'プロフィール', ['id' => Auth::user()->id],['class' => 'nav-item nav-link bg-light']) !!}
         @endif
            
        </nav>

     <div class="voice-contents mt-2">
            <div class="card text-center hover text-white bg-dark mt-3">
                <div class="card-header">
                    <h3 class="card-title">voice_name</h3>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/voiceicon.jpg" alt="icon"></a>
                </div> 
            </div>
            <div class="card text-center text-white bg-dark hover mt-3">
                <div class="card-header">
                    <h3 class="card-title">voice_name</h3>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/voiceicon.jpg" alt="icon"></a>
                </div> 
            </div>
            <!--voiceはcardを複製して追加されていく-->
     </div>
</div>


    @endsection