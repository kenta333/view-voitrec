@extends('users.login_layout')

@section('content')
<div class="card mb-3 mt-4" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <form>
  <div class="form-group">
    <h2><label for="exampleFormControlFile1">アイコンの画像を変更する</label></h2>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

      </div>
    </div>
  </div>
</div>

<div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="box">
            <h4 class="text-center">マイプロフィール編集</h4>
            </div>

            {!! Form::open(['route' => ['users.update',$user->id], 'method' => 'put']) !!}
           
                <div class="form-group">
                    {!! Form::label('old', '年齢(任意)') !!}
                    {!! Form::text('old', old('old'), ['class' => 'form-control']) !!}
                </div>
                
                   <div class="form-group">
                    {!! Form::label('gender', '性別') !!}
                    {!! Form::text('gender', old('gender'), ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('like', '好きなアーティスト') !!}
                    {!! Form::text('like', old('like'), ['class' => 'form-control']) !!}
                </div>
                
                  <div class="form-group">
                    {!! Form::label('free', '自己紹介文') !!}
                    {!! Form::text('free', old('free'), ['class' => 'form-control']) !!}
                </div>
                 <br>
                  <br>
                 

                {!! Form::submit('変更', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
             <br>
              <br>
               <br>
        </div>
    </div>

@endsection