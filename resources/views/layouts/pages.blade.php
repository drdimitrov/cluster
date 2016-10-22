<!DOCTYPE HTML>

<html>
	<head>
		<title>Cluster</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('css/all.css')}}" />
		<link rel="stylesheet" href="{{ asset('fancybox/jquery.fancybox.css')}}" />
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Courgette|Satisfy&subset=latin-ext" rel="stylesheet">
	</head>
	<body>
		<!-- Slide-out menu -->
		<div class="nav-side">			
			<a href="#" class="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>

			<ul>
				<li><a href="/">Начало</a></li>
				<li><a href="{{ url('/pictures') }}">Снимки</a></li>
				<li><a href="{{ url('/videos') }}">Видео</a></li>
				<hr/>
				@if(Auth::guest())
					<li><a href="/login">Login</a></li>
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
		</div>

		<!-- Nav -->
		<nav id="nav">
			<ul class="container">				
				<li><a href="{{ url('/') }}">Начало</a></li>
				<li><a href="/news">Новини</a></li>
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
							<li><a href="{{ url('/password/reset', ['token']) }}">Reset password</a></li>						
						@endif
					</ul>
				</li>
				
			</ul>
		</nav>

		<!-- Scoll top -->
		<div class="scroll-top-wrapper">
		    <span class="scroll-top-inner">
		        <img src="/images/lisko.png" class="glyphicon glyphicon-arrow-up" height="95"></img>
		    </span>
		</div>

		@yield('content')

		@include('partials.contact')

		<!-- Scripts -->
		<script src="{{ asset('js/all.js')}}"></script>
		<script src="{{ asset('fancybox/jquery.fancybox.js')}}"></script>		
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

			    $('.fancyimg').fancybox({
					openEffect	: 'none',
					closeEffect	: 'none',
					type : 'image'
				});

				$('.fancyvideo').fancybox({
			        openEffect  : 'none',
			        closeEffect : 'none',
			        nextEffect  : 'none',
			        prevEffect  : 'none',
			        padding     : 0,
			        margin      : [20, 60, 20, 60] // Increase left/right margin
			    });


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