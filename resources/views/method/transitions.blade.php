@extends('layouts.method')
<link rel="stylesheet" type="text/css" href="{{ asset('jqueryui/jquery-ui.min.css') }}">
<style>
	#tabs-3{
		display: flex;
		align-items: center;
		justify-content: center;
	}
</style>
@section('method_content')
<h3>{{ $transitions->name }}</h3>

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Диаграми</a></li>

		@if(count($transitions->notes))
		<li><a href="#tabs-2">Ноти</a></li>
		@endif

		@if(count($transitions->videos))
		<li><a href="#tabs-3">Видео</a></li>
		@endif
	</ul>
	<div id="tabs-1">
		@foreach($transitions->transitions as $trans)		
			{{-- <div id="image-container" style="postion: relative;">
			   <img src="{{ asset('storage/transition_1/'.$trans->name.'.png')}}" alt="" />
			   @if($trans->description)
				<p>{{ $trans->description }}</p>
			   @endif
			   <div style="width: 100%; height: 100%; position: absolute; top: 0; left: 0"></div>
			</div> --}}
			<img src="{{ asset('storage/transition_'.$trans->transition.'/'.$trans->name.'.png')}}" oncontextmenu="return false;"/>
			@if($trans->description)
				<p>{{ $trans->description }}</p>
		   	@endif
		@endforeach
	</div>

	@if(count($transitions->notes))
	<div id="tabs-2">
		@foreach($transitions->notes as $note)
			<img src="{{ asset('storage/notes_'.$note->transition.'/'.$note->name.'.png')}}" oncontextmenu="return false;"/>
			@if($note->description)
				<p>{{ $note->description }}</p>
		   	@endif
		@endforeach
	</div>
	@endif

	@if(count($transitions->videos))
	<div id="tabs-3">
		@foreach($transitions->videos as $v)
		<a href="http://www.youtube.com/embed/{{ $v->name }}/?autoplay=1&wmode=opaque" class="fancyvideo fancybox fancybox.iframe" title="{{ $v->description }}">							
			<img src="http://img.youtube.com/vi/{{ $v->name }}/0.jpg">
		</a>
		@endforeach
	</div>
	@endif
</div>


@stop