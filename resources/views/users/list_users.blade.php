@extends('users.login_layout')
@section('content')
<nav class="nav nav-pills nav-fill mt-4">
  <a class="nav-item nav-link  bg-dark active " href="#">一般user一覧</a>
  <a class="nav-item nav-link bg-light  " href='/users.t_list'>講師user一覧</a>
</nav>
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