@extends('users.login_layout')

@section('content')
<div class="row">
        <aside class="col-lg-7">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">{{ $voice->title }}</h3>
                </div>
                <div class="card-body">
                      <audio controls>
                           <source src="{{$voice->file}}">
                           </audio>
                    <ul class="list-group list-group-flush">　
    <li class="list-group-item">このvoiceの投稿者コメント</li>
       
    <li class="list-group-item"><h3>{{$voice->content}}</h3>   
    投稿ユーザー：(<a href="/users/{{$user->id}}">{{ $user->name}}</a>)さん
                           @if (Auth::id() == $voice->user_id)
                            {!! Form::open(['route' => ['voice.delete', $voice->id], 'method' => 'delete']) !!}
                            {!! Form::submit('このvoiceを削除する', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                            @endif</li>

  </ul>
                </div>
                </div> 
        </aside>
        <!--コメントエリア-->
         <div class="col-lg-5">
        
          <div class="text-center">
               {!! link_to_route('comment.create', 'このvoiceにコメントする', ['id' => $voice->id], ['class' => 'btn btn-primary btn-block mt-4 mb-4']) !!}
                </div>
                <!--ここから-->
             @foreach($voice->comments_voice as $comment) 
        <div class="comment-block">   
        <div class="media mt-3">
            <img class="mr-3" src="/icon.jpg">
            <div class="media-body">
           <h5>{!! link_to_route('show', $comment->user->name, ['id' => $comment->user->id]) !!}</h5>
            {{-- 投稿削除ボタンのフォーム --}}
                {{$comment->created_at}}
                <h5>{{$comment->content}}</h5>
                            @if (Auth::id() == $comment->user_id)
                            {!! Form::open(['route' => ['comment.delete', $comment->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                            @endif
            </div>
            </div>
    </div>  
       @endforeach
            <!--ここまでをforeach-->
           
        </div>
</div>

@endsection