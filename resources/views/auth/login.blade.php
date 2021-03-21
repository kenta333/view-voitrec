@extends('layout.head_and_script')
@section('content')
    <div class="text-center font_change pt-5">
         <br>
         <br>
         <br>
         <h1>ログイン</h1>
    </div>
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                {!! Form::open(['route' => 'login.post']) !!}
                  <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                  </div>
                      <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                      </div>
                       <br>
                       <br>
                        {!! Form::submit('ログイン', ['class' => 'btn btn-warning btn-block']) !!}
                        {!! Form::close() !!}
        </div>
    </div>
@endsection