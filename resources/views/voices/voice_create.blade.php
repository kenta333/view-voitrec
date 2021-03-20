@extends('users.login_layout')
  

@section('content')


 
            
             @include('commons.error')
          <div class="container"> 
          <div class="col-lg-12">
     {!! Form::open(['route' => 'voice.store', 'files' => true]) !!}       
     <div class="text-center">
         <a class="btn" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    　　　<div id="testbutton">
        　</div>
        　</a>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <div class="form-group box col-12">
                    {!! Form::label('youtube_url', 'https://www.youtube.com/embed/VIDEO_ID」の「VIDEO_ID」のみを項目に入力してください　▼') !!}
                    {!! Form::text('youtube_url', old('youtube_url'), ['class' => 'form-control']) !!}
                    <br>
                    <img src="/youtube.png" alt="youtube" width="100%" height="100%">
                </div>
              </div>
            </div>
              <h1>&#x261D; YouTube here! &#x261D;</h1>
              </div>
            <hr width="500">
   </div>
  
            <br>
<div class="text-center">
　 <div class="form-group box">
　     {!! Form::label('file', '●音声ファイルや動画ファイルのアップロードはこちら') !!}
      {!! Form::file('file', ['method'=>'post','enctype'=>'multipart/form-data','accept'=>'.avi,.mov,.mp4,.mp3,.webm,.wmv']) !!}
  </div>
  </div>
                <div class="form-group ">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                </div>

                  <div class="form-group">
                    {!! Form::label('content', '詳細コメント') !!}
                    {{Form::textarea('content', null, ['class' => 'form-control', 'id' => 'textareaRemarks', 'placeholder' => 'ここにあなたの歌に関わる悩みや思っていることを入力しましょう。', 'rows' => '10'])}}
                </div><br>
                

               
　　　　　　　 {{ csrf_field() }}
                {!! Form::submit('アップロード', ['class' => 'btn btn-primary btn-block btn-lg ']) !!}
            {!! Form::close() !!}
             <br>
              <br>
               <br>
        </div>
        <div class="text-center">
        {!! link_to_route('index', 'トップページに戻る', [], ['class' => 'btn btn-outline-danger  mb-2']) !!}
        </div>
        

   </div>
    
  


@endsection

