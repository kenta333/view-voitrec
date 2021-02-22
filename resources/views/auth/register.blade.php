@extends('layout.head_and_script')
@section('content')
 
    <div class="text-center">
        <br>
         <br>
          <br>

        <h1>新規登録</h1>
            <p class="mt-2">アカウントをお持ちの方は {!! link_to_route('login', 'こちらからログイン') !!}</p>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
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
                
                <div class="form-group">
                    {!! Form::label('old', '年齢(任意)') !!}
                    {!! Form::select('selectEvaluate', ['young' => '0～27歳', 'midlle' => '28～40歳', 'ground' => '41歳以上'], 'ordinarily', ['class' => 'form-control','id' => 'selectEvalute'])!!}
                </div>
                
                   <div class="form-group">
                    {!! Form::label('gender', '性別') !!}
                    {!! Form::select('selectEvaluate', ['men' => '男性', 'women' => '女性'], 'ordinarily', ['class' => 'form-control','id' => 'selectEvalute'])!!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('like', '好きなジャンル') !!}
                    {!! Form::select('selectEvaluate', ['rock' => 'ロック', 'pop' => 'pops', 'jazz' => 'ジャズ','another'=>'その他'], 'ordinarily', ['class' => 'form-control','id' => 'selectEvalute'])!!}
                </div>
                 <br>
                  <br>
                 

                {!! Form::submit('登録', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
             <br>
              <br>
               <br>
        </div>
    </div>
@endsection