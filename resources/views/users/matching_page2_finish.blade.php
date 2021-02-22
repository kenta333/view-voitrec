@extends('users.login_layout')

@section('content')

<!--このファイルはマッチングページの条件分岐のひとつです。ログインユーザーが自分以外のユーザーのページのマッチングページを押した場合はこのページを表示-->

<div class="text-center mt-5">
<div class="red-font">
    <p>※マッチング成立後は有料コンテンツとなります</p>
</div>
<h3><a href="#">user_name</a>さんへマッチングを希望しました。<br>
相手方が受諾した場合、マッチング成立のお知らせメールが届きます。</h3>
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
マッチング成立後のトレーニングは有料となります。</p><br><br>
 {!! link_to_route('signup.get', 'マイプロフィールに戻る', [], ['class' => 'btn btn-lg btn-outline-info btn-block mt-3 mb-3']) !!}
</div>

@endsection