@extends('users.login_layout')

@section('content')
<div class="text-center box">
<h1>あなたとのマッチングを希望しているユーザー</h1>
<div class="red-font">
    <p>※マッチング成立後は有料コンテンツとなります</p>
</div>
</div>
<div class="container">
            <div class="row">
                <div class="col-md-4">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title"><a href="#">user_name</h3></a>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                   <div class="card-text">
                       {!! link_to_route('signup.get', '受諾する', [], ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! link_to_route('signup.get', '受諾しない', [], ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                       <p class="red-font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください</p>
                   </div>
                </div> 
            </div>
                </div>
                <div class="col-md-4">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title"><a href="#">user_name</h3></a>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                   <div class="card-text">
                       {!! link_to_route('signup.get', '受諾する', [], ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! link_to_route('signup.get', '受諾しない', [], ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                       <p class="red-font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください</p>
                   </div>
                </div> 
            </div>
                </div>
                
                 <div class="col-md-4">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title"><a href="#">user_name</h3></a>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                   <div class="card-text">
                       {!! link_to_route('signup.get', '受諾する', [], ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! link_to_route('signup.get', '受諾しない', [], ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                       <p class="red-font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください</p>
                   </div>
                </div> 
            </div>
                </div>
                <div class="col-md-4">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title"><a href="#">user_name</h3></a>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                   <div class="card-text">
                       {!! link_to_route('signup.get', '受諾する', [], ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! link_to_route('signup.get', '受諾しない', [], ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                       <p class="red-font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください</p>
                   </div>
                </div> 
            </div>
                </div>
                <!--このまま複製-->
                      
                </div>
                
            </div>
</div>

<!--このファイル内にマッチング関係の各ページをすべてコーディングする。条件分岐でユーザーによって表示する画面を切り替える。-->

@endsection