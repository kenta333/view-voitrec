@extends('users.login_layout')
@section('content')
<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                     @if($user->type==1)
                       <div class ="red_font">
                         [講師]
                       </div>
                     @else
                       <div class ="blue_font">
                         [一般]
                       </div>
                     @endif
                      <h3 class="card-title">{{$user->name}}</h3>
                </div>
                        <div class="card-body">
                          <div class="trim_slim">
                            <img src="{{$user->file}}" alt="">
                          </div>
                             <h5>フォロー／{!! link_to_route('users.followings', $user->followings_count, ['id' => $user->id], []) !!}</h5>
                             <h5>フォロワー／{!! link_to_route('users.followers', $user->followers_count, ['id' => $user->id], []) !!}</h5>
                             {!! link_to_route('users.mpage', 'マッチング', ['id' => $user->id], ['class' => 'btn btn-danger mt-2 mb-2']) !!}
                             <span class= "badge badge-pill badge-danger"> {{ $user->m_requests_count}}</span>
                             @include('user_follow.follow_button')
                             <!--アップロードボタンは閲覧ページが自分のページだった場合のみ表示する-->
                             @if (Auth::id()==$user->id)
                               {!! link_to_route('voice.add', 'voiceをアップロードする', [], ['class' => 'btn btn-outline-danger mt-2 mb-2']) !!}
                             @endif
                        </div> 
            </div>
        </aside>
                                 <div class="col-sm-8">
                                   <nav class="nav nav-pills nav-fill mt-4">
                                     <a class="nav-item nav-link bg-light" href="/users/{{$user->id}}/followings">フォロー一覧</a>
                                     <a class="nav-item nav-link bg-dark active " href="#">フォロワー一覧</a>
                                   </nav>
                                   <!--フォローユーザーのみ読み取って表示する-->
                                   @if (count($users) > 0)
                                     @foreach ($users as $user)  
                                     <div class="media border">
                                       <img class="mr-3 trim_slim" src="{{$user->file}}" alt="image">
                                           <div class="media-body">
                                             <h5> {!! link_to_route('show', $user->name, ['id' => $user->id]) !!}</h5>
                                             @if($user->type==1)
                                               <div class ="red_font">
                                                 [講師]
                                               </div>
                                             @else
                                               <div class ="blue_font">
                                                 [一般]
                                               </div>
                                             @endif
                                            {{$user->free}}
                                                 @if (Auth::id()!=$user->id)
                                                 <!--ユーザー一覧は自分も入っているため自分のカードにはフォローボタンを表示しない-->
                                                   @include('user_follow.follow_button')
                                                 @endif
                                 </div>
</div>
                                     @endforeach
                                   @endif
                                   <!--複製-->
                                   {{ $users->links() }}
@endsection

