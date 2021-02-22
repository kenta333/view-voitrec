@extends('users.login_layout')

@section('content')

<div class="row">
        <div class="col-sm-6 offset-sm-3 mt-3">
            <div class="box">
            <h4 class="text-center ">voice新規作成</h4><br>
            <p class="text-center">必要な情報を入力してあなたの歌声をアップロードします</p>
            </div>
            
                <div class="form-group">
                    <div class="d-sm-flex flex-row">
                    <img class="icon-image" src="/voiceicon.jpg" alt="">
                    <img class="icon-image" src="/youtube-logo.jpg" alt="">
                    </div>
                    
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'タイトル') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                  <div class="form-group">
                    {!! Form::label('free', '詳細コメント') !!}
                    {!! Form::text('name', old('free'), ['class' => 'form-control']) !!}
                </div><br>
                
<div class="input-group-prepend">
         <div class="input-group-text">URL</div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="YouTubeのURLをこちらに入力することでvoitrec上でも公開できます">
</div>
<br>
<br>

                {!! Form::submit('アップロード', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
             <br>
              <br>
               <br>
        </div>
    </div>
    <div class="text-right">
    <button type="button" class="btn btn-outline-danger mt-2 mb-2">戻る</button>
    </div>


@endsection

