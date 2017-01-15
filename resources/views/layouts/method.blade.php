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
	vertical-align: middle;
	font-size: .9em;
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

.label-holder{
	display: inline-block;
	position: relative;
	bottom: 3px;
}

.label {
	border-radius: 0;
	text-shadow: none;
	font-size: 11px; 
	font-weight: normal;
	padding: 3px 5px 3px;			
}

.label-success{
	background-color: #82af6f!important
}

.label.arrowed{ 
	position: relative;
	margin-left: 9px 
}

.label.arrowed:before{ 
	display: inline-block; content: ""; 
	position: absolute; 
	left: -14px; 
	top: 0; 
	border: 9px solid transparent; 
	border-width: 9px 7px; 
	border-right-color: #abbac3 
}

.label[class*="span"][class*="arrow"] { 
	min-height: 0 
}

.label-success.arrowed:before { 
	border-right-color: #82af6f 
}
</style>
<div class="wrapper style2">
	<article id="about">
		<header>
			<h2>Минорна пентатоника</h2>								  
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
							@php($trcnt = 1)
							@foreach($transgroups as $tg)							
							<li>
								<a 
									@if(Request::segment(4) == $trcnt) 
									class="active-side" 
									@endif 
									href="{{ url('/method/'.$part.'/transition/'.$trcnt) }}">
									{{ $tg->name }}
									
									@if($tg->created_at > \Carbon\Carbon::now()->addDay(-7))
									<div class="label-holder">
										<span class="label label-success arrowed"> Ново</span>
									</div>
									@endif
								</a>
							</li>
							
							@php($trcnt++)
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