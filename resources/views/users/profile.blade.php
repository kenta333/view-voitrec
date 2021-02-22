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
            <a class="nav-item nav-link bg-light " href="#">voice</a>
             <a class="nav-item nav-link  bg-dark active" href="#">プロフィール</a>
        </nav>
     <div class="profile mt-2 container">
         <div class="jumbotron">
             <h1 class="display-3">プロフィール</h1>
             <p class="lead">ここにプロフィールの内容が入ります。</p>
              <button type="button" class="btn btn-outline-danger mt-2 mb-2">編集する</button>
             
         </div>
     </div>


    @endsection