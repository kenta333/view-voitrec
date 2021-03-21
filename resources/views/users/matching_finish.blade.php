@extends('users.login_layout')
@section('content')
<div class="text-center mt-5">
         <br>
         <br>
         <br>
         <br>
         <h1>マッチング成立となったユーザーのお知らせ</h1>
</div>
     <div class="container mt-5">
         <div class="row">
             <div class="col-md-4">
                 <div class="card text-center hover mt-3">
                     <div class="card-header">
                       <h3 class="card-title"> <a href="/">{{Auth::user()->name}}</h3></a>
                     </div>
                         <div class="card-body">
                             <div class="trim_slim">
                                 <img src="{{Auth::user()->file}}" alt="">
                             </div>
                             </div> 
                         </div>
                 </div>
                            <div class="col-md-4 text-center icon_up">
                                <img src="/matching.png" alt="image">
                            </div>
                            <!--マッチングユーザー境目-->
                                <div class="col-md-4">
                                    <div class="card text-center hover  mt-3">
                                        <div class="card-header">
                                           <h3 class="card-title">{!! link_to_route('show', $user->name, ['id' => $user->id]) !!}</h3>
                                        </div>
                                            <div class="card-body">
                                                <div class="trim_slim">
                                                  <img src="{{$user->file}}" alt="">
                                                </div>
                                            </div> 
                                    </div>
                                </div>
         </div>
            <br>
            <div class="last_row">
                <div class="text-center">
                  <h3>上記ユーザーのマッチングが成功しました。<br>
                  ご登録頂いているメールアドレスへ確認用メールをお送りします。</h3>
                  <br>
                  <p> メール内容のURLにアクセス頂き、さっそく今後のカリキュラムを作成してください。
                  </p>
                      <div class="red_font">
                        <p>トレーニングを開始した時点で有料コンテンツとなります。
                         次の「カリキュラム作成」の工程で問題が生じた場合は講師にお申し付けください。
                         <br>
                        トレーニングは「カリキュラム作成」が完了した後にスタートします。</p>
                      </div>
                      {!! link_to_route('index', 'マイプロフィールに戻る', [], ['class' => 'btn btn-info btn-block mt-5']) !!}
            </div>
                </div>
     </div>
@endsection