@extends('users.login_layout')

@section('content')
 @if(empty($matching_each))
<div class="text-center mt-5">
<h1>あなたとのマッチングを希望しているユーザー</h1>

<div class="red_font">
    <p>※マッチング成立後は有料コンテンツとなります</p>
</div>
</div>
@endif
<div class="text-center">
<p> <a class="btn btn-dark mt-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  @if(empty($matching_each))
    あなたがマッチングのリクエストを出しているuser一覧はこちら
    @else
    あなたが出したマッチングリクエストの一覧
    @endif
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
     @foreach ($matching as $muser) 
    
                 <h5> {!! link_to_route('show', $muser->name, ['id' => $muser->id]) !!} </h5>
                    <div class="trim_mini center">
                   <img src="{{$muser->file}}" alt="">
                   </div>
                  {!! Form::open(['route' => ['matching_canceled', $muser->id], 'method' => 'delete']) !!}
                  @if(empty($matching_each))
                         {!! Form::submit('リクエスト取り消し', ['class' => 'btn btn-lg btn-outline-danger btn-sm mb-3 mt-1']) !!}
                         @else
                         {!! Form::submit('取り消し', ['class' => 'btn btn-lg btn-outline-danger btn-sm mb-3']) !!}
                         @endif
                         
                      {!! Form::close() !!}
                  @endforeach

  </div>
</div>
</div>

<!--マッチング成立している場合は「このユーザーは既にマッチングが成立しているユーザーです。」-->
@if(!empty($matching_each))
<div class="text-center">
    <br>
<h1>マッチングは下記ユーザーと既に完了しております</h1>
<br>
  @foreach ($requests as $cuser) 
  @if(Auth::user()->is_matched($cuser->id))
<div class="container">
            <div class="row">
                <div class="col-md-12">
            <div class="card text-center hover mt-3">
                <div class="card-header">
                    <h3 class="card-title"> {!! link_to_route('show', $cuser->name, ['id' => $cuser->id]) !!}</h3>
                </div>
                <div class="card-body">
                     <div class="trim center">
                   <img src="{{$cuser->file}}" alt="">
</div>

                </div>
           </div>
            </div>
         </div>
</div>
@endif
@endforeach


@else

<div class="container">
            <div class="row">
                @foreach ($requests as $user) 
               
           
                <div class="col-md-12">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title">{!! link_to_route('show', $user->name, ['id' => $user->id]) !!}</h5></h3>
                </div>
                <div class="card-body">
                    <div class="trim center">
                   <img src="{{$user->file}}" alt="">
                   </div>
                   <div class="card-text">
                       {!! Form::open(['route' => ['users.donepage', $user->id], 'method' => 'get']) !!}
                       {!! Form::submit('受諾する(マッチング成立)', ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! Form::close() !!}
                       
                        {!! Form::open(['route' => ['user.unmatching', $user->id], 'method' => 'delete']) !!}
                         {!! Form::submit('受諾しない', ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                      {!! Form::close() !!}
                      
                       <p class="red_font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください</p>
                   </div>
                </div> 
            </div>
                </div>
            
              @endforeach
                <!--このまま複製-->
                      
                </div>
                
            </div>
</div>


                

   
   @endif
@endsection