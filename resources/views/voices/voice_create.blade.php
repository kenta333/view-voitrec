@extends('users.login_layout')
  

@section('content')


 
            
             @include('commons.error')
            
                <div class="form-group">
                    <div class="d-sm-flex flex-row">
                    <img class="icon-image" src="/voiceicon.jpg" alt="">
                    <img class="icon-image" src="/youtube-logo.jpg" alt="">
                    </div>
                    
                

            {!! Form::open(['route' => 'voice.store', 'files' => true]) !!}
            
            <div class="form-group">
                    {!! Form::file('file', ['method'=>'post','enctype'=>'multipart/form-data']) !!}
                  
                </div>
            
            
            
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                </div>

                  <div class="form-group">
                    {!! Form::label('content', '詳細コメント') !!}
                    {{Form::textarea('content', null, ['class' => 'form-control', 'id' => 'textareaRemarks', 'placeholder' => 'ここにあなたの歌に関わる悩みや思っていることを入力しましょう。', 'rows' => '10'])}}
                </div><br>
                
<!--<div class="input-group-prepend">-->
<!--         <div class="input-group-text">URL</div>-->
<!--        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="YouTubeのURLをこちらに入力することでvoitrec上でも公開できます">-->
<!--</div>-->
                 <br>
                  <br>
　　　　　　　 {{ csrf_field() }}
                {!! Form::submit('アップロード', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
             <br>
              <br>
               <br>
        </div>
        <div class="text-center">
        {!! link_to_route('index', 'トップページに戻る', [], ['class' => 'btn btn-outline-danger  mb-2']) !!}
        </div>
        

   
    
  


@endsection

