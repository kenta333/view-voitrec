@extends('users.login_layout')

@section('content')
<div class="row">
        <aside class="col-lg-7">
            <div class="card text-center mt-4">
                <div class="card-header">
              
                    
                    <h3 class="card-title">{{ $voice->title }}</h3>
                </div>
           
                <div class="card-body">
                    
                    <!--ファイルの場合-->
                    @if(isset($voice->file))
                      <audio controls>
                           <source src="{{$voice->file}}">
                           </audio>
                           @endif
                           
                           <!--youtubeの場合-->
                             @if(isset($voice->youtube_url))
                      <div class="text-center">
                         <iframe width="100%" height="315" 
                        src="https://www.youtube.com/embed/{{$voice->youtube_url}}" 
                        frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture" allowfullscreen></iframe>
                      </div>
                       @endif
                      
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
         <aside class="col-lg-5">
             
             
             <p>

  <button class='btn btn-primary btn-block mt-4 mb-4' type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   このvoiceにコメントする
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    @include('commons.error')
             {{Form::open(['route' => ['comment.store',$voice->id],  'method' => 'post'])}}
             <div class="form-group mb-3">
             {{Form::textarea('content', null, ['class' => 'form-control', 'id' => 'textareaRemarks', 'placeholder' => '歌い手を応援するような"アドバイス"を基本としたコメントを書き込んでください。
誹謗中傷を目的としたコメントは当コンテンツにおいて不必要なため、発見し次第に管理者より削除させて頂く場合もございます。
予めご理解、ご協力のほど宜しくお願い致します。', 'rows' => '15'])}}
</div>
{{Form::submit('送信する', ['class'=>'btn btn-primary btn-block'])}}
             {{Form::close()}}
  </div>
</div>
        
       
                <!--ここから-->
             @foreach($voice->comments_voice as $comment) 
        <div class="comment_block">   
        <div class="media mt-3">
           <div class="trim_mini ml-4">
               <a href="{{ action('UsersController@show', $comment->user->id) }}">
                   <img src="{{$comment->user->file}}" alt="">
                   </a>
                   </div>
            <div class="media-body ml-4">
           <h5>{!! link_to_route('show', $comment->user->name, ['id' => $comment->user->id]) !!}</h5>
            @if($comment->user->type==1)
                    <div class ="red_font">
                  [講師]
                    </div>
                     @else
                    <div class ="blue_font">
                  [一般]
                    </div>
                    @endif
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