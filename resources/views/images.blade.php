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
				@foreach($images as $image)
					@if($cnt > 0 && $cnt % 3 == 0) <!-- Makes sets of 3 elements -->
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
	<div class="paginatorWrapper">
		{{ $images->links() }}
	</div>
	</article>
</div>

@endsection