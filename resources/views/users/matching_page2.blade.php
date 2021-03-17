@extends('users.login_layout')

@section('content')

<!--このファイルはマッチングページの条件分岐のひとつです。ログインユーザーが自分以外のユーザーのページのマッチングページを押した場合はこのページを表示-->

  <div class="text-center mt-5">
    <div class="red_font">
    <p>※マッチング成立後は有料コンテンツとなります。</p>
    </div>
    @if (empty($already))
          @if (Auth::user()->is_matched($user->id))
         <h2>このユーザーへは既にマッチングのリクエスト済です。</h2>
         
         
   @else
   @if(Auth::user()->type != $user->type)
                  <h3> {!! link_to_route('show', $user->name, ['id' => $user->id]) !!}さんへマッチングを希望するお知らせをしますか？</h3>
                  @endif
  </div>

<div class="container">
            <div class="row">
                <div class="col-md-12">
            <div class="card text-center hover mt-3">
                <div class="card-header">
                    <h3 class="card-title"> {!! link_to_route('show', $user->name, ['id' => $user->id]) !!}</h3>
                </div>
                <div class="card-body">
                     <div class="trim center">
                   <img src="{{$user->file}}" alt="">
                   </div>
                   <div class="card-text">
                       @if(Auth::user()->type != $user->type)
                          {!! Form::open(['route' => ['user.matching', $user->id], 'method' => 'post']) !!}
                       {!! Form::submit('する', ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! Form::close() !!}
                       @else
                       <h3>※このユーザーへはマッチングリクエストはできません。<br>
                       一般ユーザー同士や講師ユーザー同士でマッチングをすることはできません。</h3>
                       @endif
                       
                       {!! link_to_route('show', '戻る', [$user->id], ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                       <p class="red_font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください。</p>
                   </div>
                </div> 
            </div>
                </div>
             
           
                </div>
                
            </div>
            <br>
            <p>マッチングとは...<br>

あなたにとって一番頼りになると思った講師を選び、マッチングすることで
より有益な内容のトレーニングを直接的に受けることができます。
あなたの歌声をよりあなたらしく輝かせるためにマッチング機能をぜひご利用ください。<br><br>

(※マッチング機能を利用しない場合でもトレーニングは可能ですが、講師とのコンタクト回数には制限があります。)


両者合意のもと、マッチング成立した場合は運営からお知らせのメールを送信します。
マッチング成立後のトレーニングは有料となります。</p>

</div>

                @endif
                @else
               <h2>こちらのユーザーは現在、他ユーザーとマッチング済の状態です。</h2> 
                {!! link_to_route('show', '戻る', [$user->id], ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
               @endif

@endsection