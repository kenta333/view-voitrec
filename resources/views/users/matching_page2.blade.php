@extends('users.login_layout')

@section('content')

<!--このファイルはマッチングページの条件分岐のひとつです。ログインユーザーが自分以外のユーザーのページのマッチングページを押した場合はこのページを表示-->

<div class="text-center mt-5">
<div class="red-font">
    <p>※マッチング成立後は有料コンテンツとなります</p>
</div>
<h3><a href="#">user_name</a>さんへマッチングを希望するお知らせをしますか？</h3>
</div>

<div class="container">
            <div class="row">
                <div class="col-md-12">
            <div class="card text-center hover  mt-3">
                <div class="card-header">
                    <h3 class="card-title"><a href="#">user_name</h3></a>
                </div>
                <div class="card-body">
                   <a href="#"> <img src="/icon.jpg" alt="icon"></a>
                   <div class="card-text">
                       {!! link_to_route('signup.get', 'する', [], ['class' => 'btn btn-lg btn-primary mt-3 mb-3']) !!}
                       {!! link_to_route('signup.get', '戻る', [], ['class' => 'btn btn-lg btn-outline-danger mt-3 mb-3']) !!}
                       <p class="red-font">※一度押したボタンは取り消しができませんので、よく確認の上ボタンを押してください</p>
                   </div>
                </div> 
            </div>
                </div>
              
                <!--このまま複製-->
                      
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

@endsection