@extends('users.login_layout')

@section('content')
<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">user_name</h3>
                </div>
                
                <!--このユーザーはクリックしたユーザーのカードを表示する-->
                <div class="card-body">
                    <img src="/icon.jpg" alt="icon">
                    <p>フォロー／</p>
                     <p>フォロワー／</p>
                     <button type="button" class="btn btn-dark mt-2 mb-2">フォローする</button>
                     <button type="button" class="btn btn-danger mt-2 mb-2">マッチング</button>
                     <!--アップロードボタンは閲覧ページが自分のページだった場合のみ表示する-->
                <button type="button" class="btn btn-outline-danger mt-2 mb-2 ">voiceをアップロードする</button>
                </div> 
            </div>
        </aside>
        <div class="col-sm-8">
               <nav class="nav nav-pills nav-fill mt-4">
            <a class="nav-item nav-link bg-dark active" href="#">フォロー一覧</a>
             <a class="nav-item nav-link bg-light " href="#">フォロワー一覧</a>
        </nav>
                
                <!--フォローユーザーのみ読み取って表示する-->
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
</div>

@endsection

