@extends('layouts.pages')

@section('content')
<link rel="stylesheet" href="{{ asset('slider/jquery.bxslider.css')}}" />
<style type="text/css">


	.bx-wrapper .bx-viewport {
    
    border: 5px solid rgb(217, 217, 217);
    left: -5px;
 	background: rgb(217, 217, 217);
 	box-shadow: none;
    -webkit-transform: translatez(0);
    -moz-transform: translatez(0);
    -ms-transform: translatez(0);
    -o-transform: translatez(0);
    transform: translatez(0);
}

.style1.method_menu{
	font-size: 1.2em;
	padding: 0;
}

.style1.method_menu.ul{
	list-style-type: none;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
}

.method_menu{
	background: #e9e9e9;
}

.method_menu ul li{
	width: 100%;
	margin-bottom: 10px;
}


.method_menu a{
    padding-left: 1em;
	display: block;
	width: 100%;
	text-decoration: none;
	color: #000;
}

.method_menu li:first-child a{
	border-radius: 10px 10px 0 0;
}

.method_menu li:last-child a{
	border-radius: 0 0 10px 10px;	
}

.active-side, .method_menu a:hover{
	color: rgb(255, 204, 102) !important;
	background: #444;
}

img{
	max-width: 100%;
}

</style>
<div class="wrapper style2">
	<article id="about">
		<header>
			<h2>Метод:</h2>								  
		</header>
		<div class="container">
			<div class="row">
				<div class="12u 12u(mobile)">
					<ul class="bxslider">
						<li><img src="{{ asset('metod/slider/p1.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p2.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p3.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p4.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p5.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p6.png')}}" /></li>
					</ul>	
				</div>
				<div class="3u 12u(mobile)">
					<section class="box style1 method_menu">
						<ul>
							@foreach($transgroups as $tg)							
							<li>
								<a 
									@if(Request::segment(4) == $tg->id) 
									class="active-side" 
									@endif 
									href="{{ url('/method/'.$part.'/transition/'.$tg->id) }}">
									{{ $tg->name }}
								</a>
								</li>
							@endforeach
						</ul>
					</section>
				</div>
				<div class="9u 12u(mobile)">
					<section class="box style1">
					
					<div class="row">
						<div class="12u 12u(mobile) newsItemWraper">
							@yield('method_content')							
						</div>
							
					</div>
					</section>
				</div>				
			</div>
		</div>
	</article>
</div>
@stop