@extends('users.login_layout')

@section('content')
<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">voice_title</h3>
                </div>
                <div class="card-body">
                    <img src="/sound-sample.jpg" alt="icon">
                     <p>voiceの内容紹介</p>
                    <a href="#">投稿者のuser_name(リンク)</a><br>
                     
                <button type="button" class="btn btn-outline-danger mt-2 mb-2 ">コメントする</button>
                </div>
                </div> 
            
        </aside>
        <!--コメントエリア-->
         <div class="col-sm-8">
                <button type="button" class="btn btn-primary btn-block mt-3">
            コメント <span class="badge badge-light">4</span>
        </button>
        <div class="media mt-3">
            <img class="mr-3" src="/icon.jpg">
            <div class="media-body">
                <a href="#"><h5>ユーザー名</h5></a>
                <p>コメント日時</p>
                <p>ここにコメントが入ります。
                ここにコメントが入ります。ここにコメントが入ります。ここにコメントが入ります。
                ここにコメントが入ります。ここにコメントが入ります。ここにコメントが入ります。
                ここにコメントが入ります。ここにコメントが入ります</p>
            </div>
            </div>
             <div class="media mt-3">
            <img class="mr-3" src="/icon.jpg">
            <div class="media-body">
                <a href="#"><h5>ユーザー名</h5></a>
                 <p>コメント日時</p>
                <p>ここにコメントが入ります。ここにコメントが入ります。ここにコメントが入ります。</p>
            </div>
            </div>
              <div class="media mt-3">
            <img class="mr-3" src="/icon.jpg">
            <div class="media-body">
                <a href="#"><h5>ユーザー名</h5></a>
                 <p>コメント日時</p>
                <p>ここにコメントが入ります。ここにコメントが入ります。ここにコメントが入ります。</p>
            </div>
            </div>
            <!--複製-->
              <div class="media mt-3">
            <img class="mr-3" src="/icon.jpg">
            <div class="media-body">
                <a href="#"><h5>ユーザー名</h5></a>
                 <p>コメント日時</p>
                <p>ここにコメントが入ります。ここにコメントが入ります。ここにコメントが入ります。</p>
            </div>
            </div>
            
            <!--1colで纏まっている-->
            
        </div>
</div>
@endsection