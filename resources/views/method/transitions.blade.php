@extends('layouts.method')
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

<div id="legend">
	<h4>Легенда:</h4>
	<table>
		<tr>
			<td class="timg"><img src="{{ asset('metod/legend/1.png') }}"></td>
			<td class="tdescr">местата, където трябва да притиснем с пръст струната</td>
		</tr>
		<tr>
			<td class="timg"><img src="{{ asset('metod/legend/3.png') }}"></td>
			<td class="tdescr">цифрата в кръгчето показва кой пръст в лява ръка да използваме</td>
		</tr>
		<tr>
			<td class="timg"><img src="{{ asset('metod/legend/2.png') }}"></td>
			<td class="tdescr">основен тон/тоника/</td>
		</tr>
		<tr>
			<td class="timg">_</td>
			<td >знак за глисандо, чрез което осъществяваме преход към нова позиция и нова фигура</td>
		</tr>
		<tr>
			<td class="timg">
				<span style="color: blue">I</span>,
				<span style="color: red">II</span>,
				<span style="color: green">III</span>&nbsp;
			</td>
			<td >римското число ни показва коя фигура използваме</td>
		</tr>
	</table>
</div>
@stop