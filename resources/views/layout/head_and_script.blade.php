<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>voitrec</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Seymour+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    </head>

    <body>
     
        
            
            <div class="header">
           @include('commons.navibar')
           </div>
           <div class="top_content">
        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error')
               

            @yield('content') 
            </div>
            </div>
            
            <div class="how_to">
                <div class="wrapper">
    
                <h1><span class="logo">voitrec</span>の使い方</h1>
                <br>
                 <br>
                  <br>
                <h3><span class="badge badge-dark">phase①</span></h3>
                <p>まずはあなたの歌声を投稿しましょう。<br>
                (動画、YouTubeのリンク)</p>
                <br>
                 <h3><span class="badge badge-dark">phase②</span></h3>
                <p>公開されたあなたの歌声を聴いて、応援したいと<br>
                思ったボーカル講師がいた場合はあなたに<br>
                「アドバイス」が届きます。</p>
                <br>
                <h3><span class="badge badge-dark">phase③</span></h3>
                <p>良い講師と巡り会えたらボイストレーニングを<br>
                続けるために「マッチング」しましょう。</p>
                <br>
                <h3><span class="badge badge-dark">others</span></h3>
                <p>voitrecは皆で歌声をシェアして楽しむことができます。<br>
                コミュニティサイトとして活用することも可能です。</p>
         
            </div>
            </div>
            <footer>
               ©2021/voitrec/kk
            </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
               
        
       
    </body>
    
</html>