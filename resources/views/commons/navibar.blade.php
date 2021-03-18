
  
<div class="cp_navi">
    
<ul>
   <li><a class="logo" href="/">voitrec</a></li> 
	<li>
		<a href="#">新規登録 <span class="caret"></span></a>
		<div>
			<ul>
				<li><a href="#">{!! link_to_route('signup.get', '一般userで登録', []) !!}</a></li>
				<li><a href="#">{!! link_to_route('signup_t.get', '講師userで登録', []) !!}</a></li>
			</ul>
		</div>
	</li>
	
		<li>
		<a href="#">{!! link_to_route('login', 'ログイン')!!}</a>
		<div>
		
				
			
		
		</div>
</ul>
</div>

 <div class="view-port-lost">
<div class="hamburger">
  <span></span>
  <span></span>
  <span></span>
</div>

<nav class="globalMenuSp">
    <ul>
       
        <li><a class="logo"  href="/">voitrec</a></li>
        <li>{!! link_to_route('signup.get', '一般userで登録', []) !!}</li>
        <li>{!! link_to_route('signup_t.get', '講師userで登録', []) !!}</li>
        <li>{!! link_to_route('login', 'ログイン')!!}</li>
      
    </ul>
</nav>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
	$(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});
</script>
</div>
<link rel="stylesheet" href="{{ asset('css/css.css') }}">