

<div class="cp_navi">
    
<ul>
	
   <li><a class="logo" href="/">voitrec</a></li> 
	<li><a href="#">{!! link_to_route('new', '新着投稿', []) !!}</a></li>
	<li>
		<a href="#">user一覧 <span class="caret"></span></a>
		<div>
			<ul>
				<li><a href="#">{!! link_to_route('users.list', '一般user一覧', []) !!}</a></li>
				<li><a href="#">講師user一覧</a></li>
			</ul>
		</div>
	</li>
	
	
		<li>
		<a href="#">マイプロフィール<span class="caret"></span></a>
		<div>
			<ul>
			
				<li><a href="#">{!! link_to_route('show', 'マイプロフィール', ['id' => Auth::user()->id]) !!}</a></li>
				<li><a href="#">{!! link_to_route('user.edit', 'プロフィール編集', ['id' => Auth::user()->id]) !!}</a></li>
				
				<li><a href="#">{!! link_to_route('logout.get', 'ログアウト', []) !!}</a></li>
			</ul>
		</div>
</ul>
</div>
<link rel="stylesheet" href="{{ asset('css/css.css') }}">