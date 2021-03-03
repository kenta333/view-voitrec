@extends('layout.head_and_script')

@section('content')


       <div class="center-text">
         <h1><span class="logo">voiterc</span>はボイストレーニングマッチングサイトです。</h1>
         <br>
        <p>あなたの歌声は今よりもっと良くなる。</p>
        <br>
          <p>このサービスはあなたの歌声をより良いものにするために生まれました。</p>
         
        <p>voitrecならさまざまなボーカル講師から</p>
        <p>直接アドバイスがもらえます。</p>
      
        
        {{-- ユーザ登録ページへのリンク --}}
         {!! link_to_route('signup.get', '今すぐはじめる', [], ['class' => 'btn btn-lg btn-warning mt-3 mb-3']) !!}
        <div class="btn btn-lg btn-info">講師の方はこちらから</div>
        </div>
        <div class="under-icon">
           <a href="#"> <img src="under.png"></a>
          
        </div>

    @endsection
    
