<!-- Contact -->
<div class="wrapper style4">
	<article id="contact" class="container 75%">
		<header>
			<h2>Свържете се с нас:</h2>
			<!-- <p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p> -->
		</header>
		<div>
			<div class="row">
				<div class="12u">
					<form method="post" action="{{ url('/contact') }}">
						<div>
							<div class="row">
								<div class="6u 12u(mobile)">
									<input type="text" name="name" id="name" placeholder="Име" />
								</div>
								<div class="6u 12u(mobile)">
									<input type="text" name="email" id="email" placeholder="Имейл" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<input type="text" name="subject" id="subject" placeholder="Относно" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<textarea name="message" id="message" placeholder="Съобщение"></textarea>
								</div>
							</div>
							<div class="row 200%">
								<div class="12u">
									<ul class="actions">
										<li><input class="sfm" type="submit" value="Изпрати съобщение" /></li>
										<li><input type="reset" value="Изчисти формата" class="alt" /></li>
									</ul>
								</div>
							</div>
						</div>
						{{ csrf_field() }}
					</form>
				</div>
			</div>
			<!-- <div class="row">
				<div class="12u">
					<hr />
					<h3>Find us on ...</h3>
					<ul class="social">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>									
					</ul>
					<hr />
				</div>
			</div> -->
		</div>
		<footer>
			<ul id="copyright">
				<li>&copy; Cluster-guitar {{ date('Y') }}. All (YES, ALL) rights reserved.</li>
			</ul>

			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-88326811-1', 'auto');
			  ga('send', 'pageview');

			</script>
		</footer>
	</article>
</div>