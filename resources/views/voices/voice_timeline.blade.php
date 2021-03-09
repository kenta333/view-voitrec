@extends('users.login_layout')

@section('content')
 <div class="text-center">
<h4>最近公開されたコンテンツ</h4>
</div>

<div class="container">
            <div class="row">
                @if (count($voices) > 0)
                @foreach ($voices as $voice)
                <div class="col-md-4">
            <div class="card text-center hover text-white bg-dark mt-3">
                <div class="card-header">
                    <h3 class="card-title">{{ $voice->title }}</h3>
                </div>
                <a href="/voice/{{$voice->id}}">
                <div class="card-body">
                    <img src="/voiceicon.jpg" alt="icon">
                </div> 
                {!! link_to_route('voice.show', '詳細',  ['id' => $voice->id], ['class' => 'btn btn-outline-secondary mt-2 mb-2']) !!}
            </div>
             
                </div>
                </a>
                @endforeach
　　　　　　　　@endif
               
                <!--このまま複製-->
               
                </div>
                     　 {{ $voices->links() }}  
            </div>
</div>
　　　　　　 
　　　　　
        　　  @endsection