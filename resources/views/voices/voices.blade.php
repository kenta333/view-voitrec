@if (count($voices) > 0)
 @foreach ($voices as $voice)
     <div class="voice-contents mt-2">
            <div class="card text-center hover text-white bg-dark mt-3">
                <div class="card-header">
                    <h3 class="card-title">{{ $voice->title }}</h3>
                </div>
               <a href="/voice/{{$voice->id}}">
                    <div class="card-body">
                  
                    <img src="/voiceicon.jpg" alt="icon">
                </div> 
                {!! link_to_route('voice.show', '詳細',  ['id' => $voice->id], ['class' => 'offset-3 col-6 btn btn-outline-secondary mt-2 mb-2']) !!}
            </div>
  
            <!--voiceはcardを複製して追加されていく-->
     </div>
     </a>
@endforeach
@endif
{{ $voices->links() }}