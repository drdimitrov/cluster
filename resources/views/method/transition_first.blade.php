@extends('layouts.method')

@section('method_content')
<h3>Преход I-II</h3>
{{-- <img src="{{ asset('metod/slider/p.0.png')}}" oncontextmenu="return false;"/> --}}

<div id="image-container" style="postion: relative;">
   <img src="{{ asset('metod/slider/p.0.png')}}" alt="" />
   <div style="width: 100%; height: 100%; position: absolute; top: 0; left: 0"></div>
</div>
@stop