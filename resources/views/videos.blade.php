@extends('layouts.pages')

@section('content')
<!-- Portfolio -->
<div class="wrapper style3">
	<article id="portfolio">
		<header>
			<h2>Любими моменти</h2>
		</header>
		<div class="container">
			<div class="row">
				@php($cnt = 0)
				@foreach($videos as $v)
					@if($cnt > 0 && $cnt % 3 == 0) <!-- Makes sets of 3 elements -->
					</div>
					<div class="row">
					@endif
					<div class="4u 12u(mobile)">
						<article class="box style2 img_box">
						<a href="http://www.youtube.com/embed/{{ $v->source }}/?autoplay=1&wmode=opaque" class="fancyvideo fancybox fancybox.iframe" title="{{ $v->description }}">							
							<img src="http://img.youtube.com/vi/{{ $v->source }}/0.jpg"  width="300">
						</a>
							<p>{{ str_limit($v->description, 30, '...') }}</p>
						</article>
					</div>
					@php($cnt += 1)				
				@endforeach
			
			</div>			
		</div>

		{{ $videos->links() }}
	</article>
</div>
@endsection