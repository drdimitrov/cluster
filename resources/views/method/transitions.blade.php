@extends('layouts.method')

@section('tr_header')

	<h2>{{ $transitions->toPart->name }}</h2>
@stop

@section('bxslider')
	<ul class="bxslider">
		@foreach($transitions->transitions as $ts)
			<li>
				<img src="{{ asset('storage/'.$transitions->folder.'/'.$ts->name.'.png')}}"/>
			</li>
		@endforeach
	</ul>
@stop

@section('method_content')
<link rel="stylesheet" type="text/css" href="{{ asset('jqueryui/jquery-ui.min.css') }}">
<style>
	#tabs-3{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#legend{
		margin-top: 10px;
		padding-left: 5px;
	}

	.tdescr{
		position: relative;
		bottom: 10px;
	}

	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
	    border: 1px #595959 !important;
	    background: #595959 !important;
	    font-weight: normal;
	    color: rgb(255, 204, 102) !important;
	}

	.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
	    color: rgb(255, 204, 102) !important;
	    text-decoration: none;
	}

	li:not(.ui-state-active) a.ui-tabs-anchor:hover{
		color: rgb(190, 97, 39) !important;
	}

	.udierdiag{
		text-align: center;
		font-size: .9em;
		margin-top: -20px;
	}
</style>

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
			<img src="{{ asset('storage/'.$transitions->folder.'/'.$trans->name.'.png')}}" oncontextmenu="return false;"/>
			@if($trans->description)
				<p class="udierdiag">* {!! $trans->description !!}</p>
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
		<a href="https://www.youtube.com/embed/{{ $v->name }}/?autoplay=1&wmode=opaque" class="fancyvideo fancybox fancybox.iframe" title="{{ $v->description }}">							
			<img src="https://img.youtube.com/vi/{{ $v->name }}/0.jpg">
		</a>
		@endforeach
	</div>
	@endif
</div>

<div id="legend">
	<h3>Легенда:</h3>
	@if($transitions->toPart->type->id == 1)
		@include('legends.transitions')
	@else
		@include('legends.accords')
	@endif
</div>
@stop