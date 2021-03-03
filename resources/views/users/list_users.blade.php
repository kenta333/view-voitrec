@extends('users.login_layout')

@section('content')

<nav class="nav nav-pills nav-fill mt-4">
            <a class="nav-item nav-link  bg-dark active " href="#">一般user一覧</a>
             <a class="nav-item nav-link bg-light  " href="#">講師user一覧</a>
        </nav>
                @if (count($users) > 0)
                
@foreach ($users as $user)              
<div class="card mb-3 mt-4" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
        <a href="#">
      <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> {!! link_to_route('show', $user->name, ['id' => $user->id]) !!}</h5>
          
          <!--ユーザー一覧は自分も入っているため自分のカードにはフォローボタンを表示しない-->
         @if (Auth::id()!=$user->id)
         @include('user_follow.follow_button')
        @endif
        <p class="card-text">フォロー／</p>
         <p class="card-text">フォロワー／</p>
      </div>
    </div>
  </div>
</div>
</a>
@endforeach
@endif
<!--複製-->
{{ $users->links() }}

@endsection