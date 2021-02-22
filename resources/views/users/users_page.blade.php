@extends('users.login_layout')
@section('content')

<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">user_name</h3>
                </div>
                <div class="card-body">
                    <img src="/icon.jpg" alt="icon">
                    <p>フォロー／</p>
                     <p>フォロワー／</p>
                     <button type="button" class="btn btn-dark mt-2 mb-2">フォローする</button>
                     <button type="button" class="btn btn-danger mt-2 mb-2">マッチング</button>
                <button type="button" class="btn btn-outline-danger mt-2 mb-2 ">voiceをアップロードする</button>
                </div> 
            </div>
        </aside>
        <div class="col-sm-8">
               <nav class="nav nav-pills nav-fill mt-4">
            <a class="nav-item nav-link bg-dark active" href="#">voice</a>
             <a class="nav-item nav-link bg-light " href="#">プロフィール</a>
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