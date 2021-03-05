@extends('users.login_layout')

@section('content')
<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">{{ $voice->title }}</h3>
                </div>
                <div class="card-body">
                    <img src="/sound-sample.jpg" alt="icon">
                    <ul class="list-group list-group-flush">
    <li class="list-group-item">このvoiceの投稿者コメント<p>(<a href="/users/{{$user->id}}">{{ $user->name}}</a>)</p></li>
       
    <li class="list-group-item"><h3>{{$voice->content}}</h3></li>

  </ul>
                 
                     
                </div>
                </div> 
            
        </aside>
        

        <!--コメントエリア-->
         <div class="col-sm-8">
                <button type="button" class="btn btn-primary btn-block mt-3">
            コメント <span class="badge badge-light">4</span>
        </button>
          <div class="text-center">
               {!! link_to_route('comment.create', 'このvoiceにコメントする', ['id' => $voice->id], ['class' => 'btn btn-outline-danger mt-4 mb-4']) !!}
            
                </div>
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