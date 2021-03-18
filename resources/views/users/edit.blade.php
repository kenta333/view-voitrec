@extends('users.login_layout')

@section('content')

<div class="row">
        <div class="col-sm-12">
          <br>
           <br>
            <br>
            @include('commons.error')
            <h1 class="text-center">マイプロフィール編集</h1>
            

            {!! Form::open(['route' => ['users.update',$user->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}
                 
                 <div class="form-group box d-flex flex-row">
                  <div class="trim">
                   <img src="{{$user->file}}" alt="">
                   </div>
                   <h4 class="icon_up">
     　     {!! Form::label('file',' ') !!}
           {!! Form::file('file') !!}
           </h4>
                </div>
                
                <div class="form-group">
                    {!! Form::label('old', '年齢(任意)') !!}
                    {!! Form::text('old', $user->old, ['class' => 'form-control']) !!}
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