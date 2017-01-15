<!DOCTYPE HTML>

<html lang="bg">
	<head>
		<title>Уроци по китара | Guitar-Cluster</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="description" content="Уроци по китара - класическа, електрическа, електроакустична. Обучение по специален метод.">
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
				@if(Request::segment(1) != 'method')
					<li><a href="{{ url('/pictures') }}">Снимки</a></li>
					<li><a href="{{ url('/videos') }}">Видео</a></li>
				@else
					<li><a href="{{ url('/method') }}">Увод</a></li>
					<li><a href="{{ url('/method/1/transition/1') }}">Първа част</a></li>
				@endif
				<hr/>
				@if(Auth::guest())
					<li><a href="/register">Регистрация</a></li>
					<li><a href="/login">Вход</a></li>
					<li><a href="{{ url('/password/reset') }}">Смяна на парола</a></li>
				@else
					<li><a href="{{ url('/home') }}">Моят акаунт</a></li>
					<li>
						<a href="{{ url('/logout') }}"
		                    onclick="event.preventDefault();
		                             document.getElementById('logout-form').submit();">
		                    Изход
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

				@if(Request::segment(1) != 'method')
				<li><a href="/news">Новини</a></li>
				<li>
					<a href="#">
						Метод
					</a>
					<ul>
						<li><a href="{{ url('/method') }}">Увод</a></li>
						<li><a href="{{ url('/method/1/transition/1') }}">Първа част</a></li>
					</ul>
				</li>
				<li>
					<a href="#">
						Галерия
					</a>
					<ul>
						<li><a href="{{ url('/pictures') }}">Снимки</a></li>
						<li><a href="{{ url('/videos') }}">Видео</a></li>
					</ul>
				</li>
				@else
				<li><a href="{{ url('/method') }}">Увод</a></li>
				<li>
					<a href="#">Пентатоники</a>
					<ul>
						<li><a href="{{ url('/method/1/transition') }}">Минорни</a></li>
						<!-- <li><a href="{{ url('/method/2/transition') }}">Мажорни</a></li> -->
					</ul>
				</li>
				<li>
					<a href="#">Акорди</a>
					<ul>
						<li><a href="{{ url('/method/3/transition') }}">Минорни</a></li>
						<!-- <li><a href="{{ url('/method/4/transition') }}">Мажорни</a></li>
						<li><a href="{{ url('/method/5/transition') }}">Други</a></li> -->
					</ul>
				</li>
				<!-- <li>
					<a href="#">Ладове и гами</a>
					<ul>
						<li><a href="{{ url('/method/6/transition') }}">Старинни ладове</a></li>
						<li><a href="{{ url('/method/7/transition') }}">Минорни гами</a></li>
						<li><a href="{{ url('/method/8/transition') }}">Мажорни гами</a></li>
						<li><a href="{{ url('/method/9/transition') }}">Минорни блус гами</a></li>
						<li><a href="{{ url('/method/10/transition') }}">Мажорни блус гами</a></li>
					</ul>
				</li> -->
				@endif
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
							<li><a href="{{ url('/register') }}">Регистрация</a></li>
							<li><a href="{{ url('/login') }}">Вход</a></li>
							<li><a href="{{ url('/password/reset', ['token']) }}">Смяна на парола</a></li>
						@else
							<li><a href="{{ url('/home') }}">Моят акаунт</a></li>
							<li>
								<a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Изход
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
		        <img src="/images/lisko.png" class="glyphicon glyphicon-arrow-up" height="95"></img>
		    </span>
		</div>

		@yield('content')

		@include('partials.contact')

		<!-- Scripts -->
		<script src="{{ asset('js/all.js')}}"></script>
		<script src="{{ asset('fancybox/jquery.fancybox.js')}}"></script>		
		<script src="{{ asset('slider/jquery.bxslider.min.js')}}"></script>
		<script src="{{ asset('jqueryui/jquery-ui.min.js') }}"></script>		
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

			    $('ul.bxslider').bxSlider({
			    	mode: 'fade',
			    	controls : false,
			    	infiniteLoop: true,
					pager: false,
					auto:true,
					autoDelay:0,
					pause: 1000
			    });

			    $('#tabs').tabs();

			});	
			 
			function scrollToTop() {
			    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
			    element = $('body');
			    offset = element.offset();
			    offsetTop = offset.top;
			    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
			}

		</script>
		
		<!-- Start of StatCounter Code for Default Guide -->
		<script type="text/javascript">
		var sc_project=10977158; var sc_invisible=1; var sc_security="76f818f7"; 
		var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www.");
		document.write("<sc"+"ript type='text/javascript' src='" +
		scJsHost + "statcounter.com/counter/counter.js'></"+"script>");
		</script>
		<noscript><div class="statcounter"><a title="shopify site
		analytics" href="http://statcounter.com/shopify/"
		target="_blank"><img class="statcounter" src="//c.statcounter.com/10977158/0/76f818f7/0/"
		alt="shopify site analytics"></a></div></noscript>
		<!-- End of StatCounter Code for Default Guide -->
	</body>
</html>