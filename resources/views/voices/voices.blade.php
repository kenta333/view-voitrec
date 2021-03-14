@if (count($voices) > 0)
 @foreach ($voices as $voice)
     <div class="voice-contents mt-2">
            <div class="card text-center hover text-dark bg-dark mt-3">
                <div class="card-header">
                    <h3 class="card-title text-light">{{ $voice->title }}</h3>
                </div>
                    <div class="card-body">
                        @if(isset($voice->youtube_url))
                      <div class="text-center">
                         <iframe width="100%" height="315" 
                        src="https://www.youtube.com/embed/{{$voice->youtube_url}}" 
                        frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture" allowfullscreen></iframe>
                      </div>
                      
                       @endif
                       
                           @if(isset($voice->file))
                      <audio controls>
                           <source src="{{$voice->file}}">
                           </audio>
                          <br>
                           @endif
                     <br>
                        <div class="box">
                  {{$voice->content}}<br>
                  {!! link_to_route('voice.show', '詳細',  ['id' => $voice->id], ['class' => 'col-2 btn btn-outline-danger']) !!}
                  </div>
                </div>  
                
                
            </div>
  
            <!--voiceはcardを複製して追加されていく-->
     </div>
   
@endforeach
@endif
{{ $voices->links() }}