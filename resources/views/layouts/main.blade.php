<!DOCTYPE HTML>

<html>
	<head>
		<title>Cluster</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('css/all.css')}}" />		
	</head>
	<body>
		@include('partials.slide-out-nav')

		<!-- Nav -->
		<nav id="nav">
			<ul class="container">
				<li><a href="#top">Начало</a></li>
				<li><a href="news">Новини</a></li>
				<li><a href="#about">За нас</a></li>
				<li><a href="#teachers">Преподаватели</a></li>
				<li><a href="#method">Метод</a></li>
				<li>
					<a href="#portfolio">
						Галерия
					</a>
					<ul>
						<li><a href="{{ url('/pictures') }}">Снимки</a></li>
						<li><a href="{{ url('/videos') }}">Видео</a></li>
					</ul>
				</li>
				<li><a href="#contact">За контакт</a></li>

				<li class="user-profile">					
					<a class="drdown">
						<i class="fa fa-user" ></i>
						<i class="fa fa-caret-down" aria-hidden="true"></i>
					</a>				

					<ul>
						@if(Auth::check())
							@if(Auth::user()->isAdmin())
								<li><a href="{{ url('/admin') }}">Admin</a></li>
							@endif
						@endif

						@if(Auth::guest())
							<li><a href="{{ url('/login') }}">Login</a></li>
							<li><a href="{{ url('/password/reset') }}">Reset password</a></li>
						@else
							<li><a href="{{ url('/home') }}">Home</a></li>
							<li>
								<a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form 
	                                id="logout-form" 
	                                action="{{ url('/logout') }}" 
	                                method="POST" 
	                                style="display: none;"
                                >
                                    {{ csrf_field() }}
                                </form>
							</li>													
						@endif
					</ul>
				</li>				
			</ul>
		</nav>

		<!-- Scoll top -->
		<div class="scroll-top-wrapper">
		    <span class="scroll-top-inner">
		        <img src="images/lisko.png" class="glyphicon glyphicon-arrow-up" height="95"></img>
		    </span>
		</div>

		<!-- Home -->
		<div class="wrapper style1 first">
			<article class="container" id="top">
				<div class="row">
					<div class="4u 12u(mobile)">
						<span class="image fit"><img src="images/guitar.jpg" alt="" /></span>
					</div>
					<div class="8u 12u(mobile)">
						<header>
							<h1 class="logoh">Cluster Guitar</h1>
						</header>
						<p>
							"Музиката дава душа на вселената, криле на ума, полет на въображението..."
							<br> 
							<span class="quotauth">Платон</span>
						</p>
						<a href="#about" class="button big scrolly">Научете повече за нас</a>
					</div>
				</div>
			</article>
		</div>

		@yield('content')

		@include('partials.contact')

		<!-- Scripts -->
		<script src="{{ asset('js/all.js')}}"></script>
		<!-- <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-viewport.min.js"></script>
		<script src="assets/js/util.js"></script> -->
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<!-- <script src="assets/js/main.js"></script> -->
		<script>				
			$(function(){
 
			    $(document).on( 'scroll', function(){
			 
			        if ($(window).scrollTop() > 100) {
			            $('.scroll-top-wrapper').addClass('show');
				   $('#codeprefheader').css('position','fixed').css('top','0px');
			        } else {
			            $('.scroll-top-wrapper').removeClass('show');
				   $('#codeprefheader').css('position','relative');
			        }
			    });			    
			    
			});

			$(function(){
			    $('.scroll-top-wrapper').on('click', scrollToTop);
			});
			 
			function scrollToTop() {
			    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
			    element = $('body');
			    offset = element.offset();
			    offsetTop = offset.top;
			    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
			}
		</script>
	</body>
</html>