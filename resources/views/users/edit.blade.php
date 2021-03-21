@extends('users.login_layout')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <br>
    <br>
    <br>
    @include('commons.error')
        <h1 class="text-center">マイプロフィール編集</h1>
          <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script>
        <!--//   アイコンの画像をリアルタイムで反映させる動き-->
            $(function(){
              $('#myfile').change(function(e){
                //ファイルオブジェクトを取得する
                var file = e.target.files[0];
                var reader = new FileReader();
             
                //画像でない場合は処理終了
                if(file.type.indexOf("image") < 0){
                  alert("画像ファイルを指定してください。");
                  return false;
                }
                //アップロードした画像を設定する
                reader.onload = (function(file){
                  return function(e){
                    $("#img1").attr("src", e.target.result);
                    $("#img1").attr("title", file.name);
                  };
                })(file);
                reader.readAsDataURL(file);
              });
            });
            </script>
            <!--jquery終了-->
          　　　　  {!! Form::open(['route' => ['users.update',$user->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}
                　　 <div class="form-group box">
                         <div class="text-center">
                           <h3>アイコンを変更する</h3>
                           <img id="img1" class="trim" src="{{$user->file}}">
                           <input type="file" name="file" id="myfile">
                         </div>
                     </div>
                              <div class="form-group">
                                {!! Form::label('old', '年齢(任意)') !!}
                                <select class="form-control" id="selectEvalute" name="old">
                                <option value="{{$user->old}}"selected>{{$user->old}}</option>    
                                @for ($i = 0; $i < 101; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                                </select>
                              </div>
                                         <div class="form-group pb-3">
                                             {{Form::label('gender','性別')}}
                                             {{Form::select('gender', ['男性' => '男性', '女性' => '女性'], $user->gender, ['class' => 'form-control','id' => 'selectEvalute'])}}
                                         </div>
                                            <div class="form-group">
                                              {!! Form::label('like', '好きなアーティスト') !!}
                                              {!! Form::text('like', $user->like, ['class' => 'form-control']) !!}
                                         </div>
                                              <div class="form-group">
                                                {!! Form::label('free', '自己紹介文') !!}
                                                {{Form::textarea('free', $user->free,['class' => 'form-control', 'id' => 'textareaRemarks',  'rows' => '8'])}}
                                              </div>
                                              <br>
                                              <br>
                                              {!! Form::submit('更新する', ['class' => 'btn btn-primary btn-block']) !!}
                                              {!! Form::close() !!}
                                              <br>
                                              <br>
                                              <br>
    </div>
</div>
@endsection