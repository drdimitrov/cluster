@extends('layouts.main')

@section('content')

@if(Session::has('msg-mail'))
	<p>{{ Session::get('msg-mail') }}</p>
@endif

<!-- Work -->
<div class="wrapper style2">
	<article id="about">
		<header>
			<h2>Добре дошли на сайта на клуб "Клъстър"!</h2>						  
		</header>
		<div class="container">
			<div class="row">
				<div class="9u 12u(mobile)">
					<section class="box style1">
						{!! trans('content.about') !!}
					</section>
				</div>

				<div class="3u 12u(mobile)">
					<section class="box style1 newsstyle">
						<h3>Новини</h3>
						@foreach($latest as $l)
						<a class="news_a" href="{{ url('/news', $l->id) }}">
							<article>
								<h4>{{ str_limit($l->title_bg, 35, '...') }}</h4>
								<p>{{ str_limit($l->content_bg, 60, '...') }}</p>
							</article>
						</a>
						@endforeach
					</section>
				</div>				
			</div>
		</div>
	</article>
</div>

<!-- Teachers -->
<div class="wrapper style2 style22">
	<article id="teachers">
		<header>
			<h2>Преподаватели:</h2>						  
		</header>
		<div class="container">
			<div class="row">
				<div class="12u 12u(mobile)">
					<section class="box style1">
						<div class="row">
							<div class="3u 12u(mobile)">
								<img src="{{ asset('images/gallery.jpg')}}" class="teaherImage" height="400">
							</div>
							<div class="9u 12u(mobile)">
								<h3>{!! trans('content.teacher-name') !!}</h3>
								{!! trans('content.teacher-content') !!}
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</article>
</div>

<!-- Portfolio -->
<div class="wrapper style3">
	<article id="portfolio">
		<header>
			<h2>Любими моменти</h2>
		</header>
		<div class="container">
			<div class="row">
				@php($cnt = 0)
				@foreach($images as $image)
					@if($cnt == 3)
						</div>
						<div class="row">
					@endif
					<div class="4u 12u(mobile)">
						<article class="box style2 img_box">
							<a href="{{ $image->url }}" class="image featured fancybox fancyimg" rel="gallery1" title="{{ $image->description }}">
								<img src="{{ app('uploadcare')->getFile($image->url)->op('quality/lightest')->op('progressive/yes')->resize(400, 300, true)->getUrl() }}" alt="" />
							</a>
							<p>{{ str_limit($image->description, 30, '...') }}</p>
						</article>
					</div>
					@php($cnt += 1)				
				@endforeach
								
			</div>			
		</div>
		<footer>
			<a href="{{ url('/pictures') }}" class="button big scrolly">Виж цялата галерия</a>
		</footer>
	</article>
</div>
@stop