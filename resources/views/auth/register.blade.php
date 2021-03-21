@extends('layout.head_and_script')
@section('content')
    <div class="text-center font_change pt-5">
        <br>
        <br>
        <br>
        <h1>一般ユーザー新規登録用フォーム</h1>
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
                    <div class="form-group pb-3">
                         {{Form::label('gender','性別')}}
                         {{Form::select('gender', ['男性' => '男性', '女性' => '女性'], '男性', ['class' => 'form-control','id' => 'selectEvalute'])}}
                    </div>
                    <div class="form-group">
                         {!! Form::label('old', '年齢(任意)') !!}
                         <select class="form-control" id="selectEvalute" name="old">
                         <option value="">{{ old('old') }}</option>    
                         @for ($i = 0; $i < 101; $i++)
                         <option value="{{$i}}">{{$i}}</option>
                         @endfor
                         </select>
                    </div>
                        <div class="form-group none">
                            {!! Form::label('type', 'ユーザータイプ') !!}
                            {!! Form::text('type',0, ['class' => 'form-control']) !!}
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