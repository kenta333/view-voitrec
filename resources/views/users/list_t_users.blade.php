@extends('users.login_layout')

@section('content')
<nav class="nav nav-pills nav-fill mt-4">
            <a class="nav-item nav-link bg-light " href="#">一般user一覧</a>
             <a class="nav-item nav-link bg-dark active  " href="#">講師user一覧</a>
        </nav>
                
<div class="card mb-3 mt-4" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
        <a href="#">
      <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">user_name</h5> {!! link_to_route('signup.get', 'フォローする', [], ['class' => 'btn btn-lg btn-dark btn-sm mt-3 mb-3']) !!}
        <p class="card-text">フォロー／</p>
         <p class="card-text">フォロワー／</p>
      </div>
    </div>
  </div>
</div>
</a>

<!--複製-->

<div class="card mb-3 mt-4" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
        <a href="#">
      <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">user_name</h5> {!! link_to_route('signup.get', 'フォローする', [], ['class' => 'btn btn-lg btn-dark btn-sm mt-3 mb-3']) !!}
        <p class="card-text">フォロー／</p>
         <p class="card-text">フォロワー／</p>
      </div>
    </div>
  </div>
</div>
</a>

@endsection