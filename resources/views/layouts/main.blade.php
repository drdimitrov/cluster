<!DOCTYPE HTML>

<html>
	<head>
		<title>Cluster</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('css/all.css')}}" />
	</head>
	<body>

		<!-- Nav -->
		<nav id="nav">
			<ul class="container">
				<li><a href="#top">Начало</a></li>
				<li><a href="#work">За нас</a></li>
				<li><a href="#teachers">Преподаватели</a></li>
				<li>
					<a href="#portfolio">
						Галерия
					</a>
					<!-- <ul>
						<li><a href="#top">Снимки</a></li>
						<li><a href="#work">Видео</a></li>
					</ul> -->
				</li>
				<li><a href="#contact">За контакт</a></li>				
				<li class="user-profile">					
					<a href="/home">
						<i class="fa fa-user" ></i>
						<i class="fa fa-caret-down" aria-hidden="true"></i>
					</a>
				</li>
				
			</ul>
			<!-- <div class="langs"><a href="">BG</a> | <a href="">EN</a></div> -->
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
							<span class="quotauth">Платон</span>
						</p>
						<a href="#work" class="button big scrolly">Learn about what we do</a>
					</div>
				</div>
			</article>
		</div>

		@yield('content')

		<!-- Contact -->
		<div class="wrapper style4">
			<article id="contact" class="container 75%">
				<header>
					<h2>Have me make stuff for you.</h2>
					<p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p>
				</header>
				<div>
					<div class="row">
						<div class="12u">
							<form method="post" action="#">
								<div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobile)">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<input type="text" name="subject" id="subject" placeholder="Subject" />
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="row 200%">
										<div class="12u">
											<ul class="actions">
												<li><input class="sfm" type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Clear Form" class="alt" /></li>
											</ul>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<hr />
							<h3>Find us on ...</h3>
							<ul class="social">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<!-- <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
								<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li> -->									
							</ul>
							<hr />
						</div>
					</div>
				</div>
				<footer>
					<ul id="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>
			</article>
		</div>

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