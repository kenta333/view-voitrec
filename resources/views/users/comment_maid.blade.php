@extends('users.login_layout')

@section('content')
<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">{{ $voice->title }}</h3>
                </div>
                <div class="card-body">
                    <img src="/voiceicon.jpg" alt="icon">
                    <ul class="list-group list-group-flush">
    <li class="list-group-item">このvoiceの投稿者コメント<p>(<a href="/users/{{$user->id}}">{{ $user->name}}</a>)</p></li>
       
    <li class="list-group-item"><h3>{{$voice->content}}</h3></li>

  </ul>
                 
                     
                </div>
                </div> 
            
        </aside>
        <!--コメント入力エリア-->
        
         <div class="col-sm-8">
             @include('commons.error')
             {{Form::open(['route' => ['comment.store',$voice->id],  'method' => 'post'])}}
             <div class="form-group mb-3 mt-5">
             {{Form::textarea('content', null, ['class' => 'form-control', 'id' => 'textareaRemarks', 'placeholder' => '歌い手を応援するような"アドバイス"を基本としたコメントを書き込んでください。
誹謗中傷を目的としたコメントは当コンテンツにおいて不必要なため、発見し次第に管理者より削除させて頂く場合もございます。
予めご理解、ご協力のほど宜しくお願い致します。', 'rows' => '15'])}}
</div>
{{Form::submit('送信する', ['class'=>'btn btn-primary btn-block'])}}
             {{Form::close()}}
             
             
             
             

            </div>
            
            
        </div>
</div>
@endsection