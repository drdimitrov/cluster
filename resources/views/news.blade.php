@extends('layouts.pages')

@section('content')
<div class="wrapper style2">
	<article id="about">
		<header>
			<h2>Новини:</h2>						  
		</header>
		<div class="container">
			<div class="row">
				<div class="9u 12u(mobile)">
					<section class="box style1">
					<h4>
						@if(isset($current))
						{{ $current->title_bg }}
						@else
						{{ $news->first()->title_bg }}
						@endif
					</h4>
					<div class="row">
						<div class="12u 12u(mobile) newsItemWraper">
							@if(isset($current))
								@if(isset($current->image))
								<a href="{{ $current->image->url }}" class="fancyimg" rel="gallery1" title="{{ $current->image->description }}">							
								<img  src="{{ app('uploadcare')->getFile($current->image->url)->op('quality/lightest')->op('progressive/yes')->resize(300)->getUrl() }}" >
								</a>
								@endif
							@else
								@if(isset($news->first()->image))
								<a href="{{ $news->first()->image->url }}" class="fancyimg" rel="gallery1" title="{{ $news->first()->image->description }}">
								<img src="{{ app('uploadcare')->getFile($news->first()->image->url)->op('quality/lightest')->op('progressive/yes')->resize(300)->getUrl() }}" >
								</a>
								@endif
							@endif
							<p>
								{{ isset($current) ? $current->content_bg : $news->first()->content_bg }}
							</p>
						</div>	
					</div>
					</section>
				</div>

				<div class="3u 12u(mobile)">
					<section class="box style1 newsstyle">
						@if(!isset($current))
							@foreach($news as $item)
							<a class="news_a" href="{{ url('/news', $item->id)}}">						
								<article>							
									<h4>{{ str_limit($item->title_bg, 35, '...') }}</h4>
									<p>{{ str_limit($item->content_bg, 60, '...') }}</p>
								</article>
							</a>
							@endforeach
						@else
							@if(isset($prev))
							<a class="news_a" href="{{ url('/news', $prev->id)}}">
								<article>
									<h4>{{ str_limit($prev->title_bg, 30, '...') }}</h4>
									<p>{{ str_limit($prev->content_bg, 60, '...') }}</p>
								</article>
							</a>
							@endif
							
							<div class="current_item">
								<a class="news_a" href="{{ url('/news', $current->id)}}">
									<article>
										<h4>{{ str_limit($current->title_bg, 30, '...') }}</h4>
										<p>{{ str_limit($current->content_bg, 60, '...') }}</p>
									</article>
								</a>
							</div>

							@if(isset($next))
							<a class="news_a" href="{{ url('/news', $next->id)}}">
								<article>
									<h4>{{ str_limit($next->title_bg, 30, '...') }}</h4>
									<p>{{ str_limit($next->content_bg, 60, '...') }}</p>
								</article>
								</a>
							@endif
						@endif
					</section>
				</div>				
			</div>
		</div>
	</article>
</div>
@stop