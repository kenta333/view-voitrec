@extends('users.login_layout')

@section('content')
<h4>最近公開されたコンテンツ</h4>
<div class="red_font">
    <p>★・・・講師ユーザー</p>
    </div>
     
<div class="container">
            <div class="row">
                @if (count($voices) > 0)
                @foreach ($voices as $voice)
                <div class="col-md-4">
            <div class="card text-center hover text-dark bg-secondary mt-3 card-size">
                <div class="card-header">
                    <div class="d-flex flex-row">
                <div class="trim_mini position">
               <a href="{{ action('UsersController@show', $voice->user->id) }}">
                   <img src="{{$voice->user->file}}" alt="">
                   </a>
                    @if($voice->user->type==1)
                   <h2 class="red_font">★</h2>
                   @endif
                   </div>
                   
                    <h5 class="card-title text-white icon_up">{{ $voice->title }}</h5>
                </div>
                </div>
                <div class="card-body">
                           @if(isset($voice->youtube_url))
                      <div class="text-center">
                         <iframe width="100%" height="250" 
                        src="https://www.youtube.com/embed/{{$voice->youtube_url}}" 
                        frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture" allowfullscreen></iframe>
                      </div>
                      @endif
                      
                       @if(isset($voice->file))
                       <br>
                       <br>
                       <br>
                       <br>
                      <audio controls>
                           <source src="{{$voice->file}}">
                           </audio>
                     
                          <br>
                           @endif
                           
                </div> 
                  <div class="box ml-3 mr-3">
                  {!! link_to_route('voice.show', '詳細',  ['id' => $voice->id], ['class' => 'btn btn-outline-danger']) !!}
                  {{$voice->created_at}}:UP
                  </div>
            </div>
             
                </div>
                @endforeach
　　　　　　　　@endif
               
                <!--このまま複製-->
               
                </div>
                     　 {{ $voices->links() }}  
            </div>
</div>
　　　　　　 
　　　　　
        　　  @endsection