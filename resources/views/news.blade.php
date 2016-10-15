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
						<p>
						@if(isset($current))
						{{ $current->content_bg}}
						@else
						{{ $news->first()->content_bg}}
						@endif
						</p>

					</section>
				</div>

				<div class="3u 12u(mobile)">
					<section class="box style1 newsstyle">
						@if(!isset($current))
							@foreach($news as $item)						
							<article>							
								<h4>
									<a href="{{ url('/news', $item->id)}}">
									{{ str_limit($item->title_bg, 35, '...') }}
									</a>
								</h4>
								
								<p>{{ str_limit($item->content_bg, 60, '...') }}</p>
								
							</article>
							@endforeach
						@else
							@if(isset($prev))
							<h4>
								<a href="{{ url('/news', $prev->id)}}">
								{{ str_limit($prev->title_bg, 30, '...') }}
								</a>
							</h4>
								
							<p>{{ str_limit($prev->content_bg, 60, '...') }}</p>
							@endif
							
							<div class="current_item">
								<h4>
									<a href="{{ url('/news', $current->id)}}">
									{{ str_limit($current->title_bg, 30, '...') }}
									</a>
								</h4>
									
								<p>{{ str_limit($current->content_bg, 60, '...') }}</p>
							</div>
							@if(isset($next))
							<h4>
								<a href="{{ url('/news', $next->id)}}">
								{{ str_limit($next->title_bg, 30, '...') }}
								</a>
							</h4>
								
							<p>{{ str_limit($next->content_bg, 60, '...') }}</p>
						@endif
						@endif

						
					</section>
				</div>				
			</div>
		</div>
	</article>
</div>
@stop