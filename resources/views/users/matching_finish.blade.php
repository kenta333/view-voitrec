@extends('users.login_layout')

 <div class="matching-image">

@section('content')

<div class="text-center mt-5">
    <br><br><br><br>
<h1>マッチング成立となったユーザーのお知らせ</h1>
</div>
<div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title"><a href="#">user_name</h3></a>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                </div> 
            </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/matching.png" alt="image">
                </div>
                <!--マッチングユーザー境目-->
                <div class="col-md-4">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title"><a href="#">user_name</h3></a>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                </div> 
            </div>
                </div>
                <!--container閉じタグ-->
</div>
<br>
<div class="text-center">
<p><h3>おめでとうございます!!</h3><br>上記ユーザーのマッチングが成功しました。
ご登録頂いているメールアドレスへ確認用メールをお送りします。<br>

メール内容のURLにアクセス頂き、さっそく今後のカリキュラムを作成してください。</p>

<div class="red-font">
    <p>トレーニングを開始した時点で有料コンテンツとなります。
次の「カリキュラム作成」の工程で問題が生じた場合は講師にお申し付けください。<br>

トレーニングは「カリキュラム作成」が完了した後にスタートします。</p>
</div>

{!! Form::submit('マイプロフィールに戻る', ['class' => 'btn btn-info btn-block mt-5']) !!}
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>

@endsection