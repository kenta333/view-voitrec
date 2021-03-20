@extends('layout.head_and_script')
@section('content')
 
    <div class="text-center">
        <br>
         <br>
          <br>

        <h1>講師ユーザー新規登録用フォーム</h1>
            <p class="mt-2">アカウントをお持ちの方は {!! link_to_route('login', 'こちらからログイン') !!}</p>
    </div>

    <div class="row">
            <div class="col-sm-5 offset-sm-1 text-center flame09">
                <br>
               <h2>講師ユーザーポリシー</h2>
               <p>※必ず確認の上でご登録のほどお願いします。</p>
               <br>
              <h5><<講師ユーザーの条件>></h5><br>
              <p>-下記のいずれか一つでも当てはまる方-</p>
             
<p>・過去にボイストレーナーとしての経験がある方。<br>
・ボーカリストの育成経験がある方。<br>
・ボーカリストとしてプロフェッショナルであり、自身がボーカリストとして実務経験のある方。<br>
<br>
 {!! Form::open(['route' => 'signup.post']) !!}
<div class="custom-control custom-checkbox custom-control-inline checkbox input">
{{Form::checkbox('type', '1', false, ['class'=>'custom-control-input','id'=>'type'])}}
{{Form::label('type','&nbsp;&nbsp;私は条件を満たしています',['class'=>'custom-control-label'])}}
</div>
<br>

               </div> 
        <div class="col-sm-5 offset-sm-1 mt-3">

        
                <div class="form-group">
                    {!! Form::label('name', 'ユーザー名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
              <!--性別-->
                    <div class="form-group pb-3">
                    {{Form::label('gender','性別')}}
                   {{Form::select('gender', ['男性' => '男性', '女性' => '女性'], '男性', ['class' => 'form-control','id' => 'selectEvalute'])}}

                    </div>
                    
                    <!--年齢-->
                           <div class="form-group">
                    {!! Form::label('old', '年齢(任意)') !!}
                    <select class="form-control" id="selectEvalute" name="old">
                    <option value="">{{ old('old') }}</option>    
               @for ($i = 0; $i < 101; $i++)
 <option value="{{$i}}">{{$i}}</option>
@endfor
</select>
                </div>

                 <br>
                  <br>
                 

                {!! Form::submit('登録', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}
             <br>
              <br>
               <br>
              
        </div>
     
     
    </div>
@endsection