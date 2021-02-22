@extends('users.login_layout')

@section('content')
<div class="row">
        <aside class="col-sm-4">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <h3 class="card-title">voice_title</h3>
                </div>
                <div class="card-body">
                    <img src="/sound-sample.jpg" alt="icon">
                     <p>voiceの内容紹介</p>
                    <a href="#">投稿者のuser_name(リンク)</a><br>
                     
                <button type="button" class="btn btn-outline-danger mt-2 mb-2 ">戻る</button>
                </div>
                </div> 
            
        </aside>
        <!--コメント入力エリア-->
         <div class="col-sm-8">
<form>
 <div class="form-group">
    <label for="exampleFormControlTextarea1">---コメント内容を入力してください。---</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    <button type="button" class="btn btn-primary mt-2 mb-2 btn-block">確定</button>
  </div>
</form>
            </div>
            
            
        </div>
</div>
@endsection