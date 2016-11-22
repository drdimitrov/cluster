@extends('layouts.method')

@section('method_content')
<h3>Преход I-II</h3>
{{-- <img src="{{ asset('metod/slider/p.0.png')}}" oncontextmenu="return false;"/> --}}
@foreach($transitions as $trans)

<div id="image-container" style="postion: relative;">
   <img src="{{ asset('storage/transition_1/'.$trans->name.'.png')}}" alt="" />
   <div style="width: 100%; height: 100%; position: absolute; top: 0; left: 0"></div>
</div>
@endforeach
@stop