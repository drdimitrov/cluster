@extends('layouts.method')
<link rel="stylesheet" type="text/css" href="{{ asset('jqueryui/jquery-ui.min.css') }}">
@section('method_content')
<h3>Преход I-II</h3>

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Диаграми</a></li>
		<li><a href="#tabs-2">Ноти</a></li>
		<li><a href="#tabs-3">Видео</a></li>
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
			<img src="{{ asset('storage/transition_1/'.$trans->name.'.png')}}" oncontextmenu="return false;"/>
			@if($trans->description)
				<p>{{ $trans->description }}</p>
		   	@endif
		@endforeach
	</div>
	<div id="tabs-2">
		2
	</div>
	<div id="tabs-3">
		3
	</div>
</div>


@stop