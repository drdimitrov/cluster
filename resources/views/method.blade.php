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

.method_menu a:hover{
	color: #ccc !important;
	background: #000;
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
						<li><img src="{{ asset('metod/slider/p.0.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p.1.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p.2.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p.3.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p.4.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p.5.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p.6.png')}}" /></li>
						<li><img src="{{ asset('metod/slider/p.7.png')}}" /></li>
					</ul>	
				</div>
				<div class="3u 12u(mobile)">
					<section class="box style1 method_menu">
						<ul>
							<li><a href="">Увод</a></li>
							<li><a href="">Преход I-II</a></li>
							<li><a href="">Преход II-III</a></li>
							<li><a href="">Преход III-IV</a></li>
							<li><a href="">Генератор диаграми</a></li>
						</ul>
					</section>
				</div>
				<div class="9u 12u(mobile)">
					<section class="box style1">
					<!-- <h4>
						Method
					</h4> -->
					<div class="row">
						<div class="12u 12u(mobile) newsItemWraper">
							<p>
								Представям ви откъс от моя нов метод за овладяване на минорните пентатоники, блус пентатоники и ладове. Възникването му е провокирано от моите ученици и е вдъхновено от методиките на Любен Хараламбиев и Джон Ганапес. 
							</p>
							<p>
								Новото тук е използването на цветове, което спомага за по – доброто онагледяване и по – лесното му възприемане. Стъпките са много полегати и утвърждаващи, така че дори малки деца биха могли да започнат изучаването  на пентатониките, техните обръщения и връзките между тях. Каква е целта ми? Фантазиране, композиране и импровизация още в най-ранна детска възраст, докато интуицията и въображението все още не са закърнели. 
							</p>
							
						</div>
							
					</div>
					</section>
				</div>				
			</div>
		</div>
	</article>
</div>
@stop