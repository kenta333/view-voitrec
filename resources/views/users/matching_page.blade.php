@extends('users.login_layout')

@section('content')
<div class="text-center box">
<h1>あなたとのマッチングを希望しているユーザー</h1>

<div class="red-font">
    <p>※マッチング成立後は有料コンテンツとなります</p>
</div>
</div>
<div class="text-center">
<p> <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    あなたがマッチングのリクエストを出しているuser一覧はこちら
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
     @foreach ($matching as $muser) 
                 <h5> {!! link_to_route('show', $muser->name, ['id' => $muser->id]) !!} </h5>
                  {!! Form::open(['route' => ['matching_canceled', $muser->id], 'method' => 'delete']) !!}
                         {!! Form::submit('リクエスト取り消し', ['class' => 'btn btn-lg btn-outline-danger btn-sm mb-3']) !!}
                      {!! Form::close() !!}
                  @endforeach

  </div>
</div>
</div>

<!--マッチング成立している場合は「このユーザーは既にマッチングが成立しているユーザーです。」-->
<!--@if(Auth::user()->matchings() && Auth::user()->m_requests())-->
<!--マッチング成立しています。-->
<!--@endif-->


<div class="container">
            <div class="row">
                @foreach ($requests as $user) 
               
           
                <div class="col-md-4">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title">{!! link_to_route('show', $user->name, ['id' => $user->id]) !!}</h5></h3>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                   <div class="card-text">
                       {!! Form::open(['route' => ['users.donepage', $user->id], 'method' => 'post']) !!}
                       {!! Form::submit('受諾する(マッチング成立)', ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! Form::close() !!}
                       
                        {!! Form::open(['route' => ['user.unmatching', $user->id], 'method' => 'delete']) !!}
                         {!! Form::submit('受諾しない', ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                      {!! Form::close() !!}
                      
                       <p class="red-font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください</p>
                   </div>
                </div> 
            </div>
                </div>
            
              @endforeach
                <!--このまま複製-->
                      
                </div>
                
            </div>
</div>


                

   
   
@endsection