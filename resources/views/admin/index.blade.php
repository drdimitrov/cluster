@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ \Auth::user()->name }}</div>

                <div class="panel-body">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-2">
                				<ul>
                					<li><a href="{{ url('/admin/images') }}">Images</a></li>
                					<li><a href="{{ url('/admin/videos') }}">Videos</a></li>
                                    <li><a href="{{ url('/admin/news') }}">News</a></li>
                                    <li><a href="{{ url('/admin/transition-groups') }}">Transition Groups</a></li>
                                    <li><a href="{{ url('/admin/transitions') }}">Transitions</a></li>
                                    <li><a href="{{ url('/admin/transition-notes') }}">Method notes</a></li>
                					<li><a href="{{ url('/admin/transition-videos') }}">Method videos</a></li>
                				</ul>                				
                			</div>
                			<div class="col-md-10">
                				@yield('admin_content')
                			</div>
                		</div>
                	</div>    
                </div>
            </div>
        </div>
    </div>
</div>
@stop
