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
                			<div class="col-md-4">
                				<h4>Images</h4>
                				<ul>
                					<li><a href="{{ url('/admin/images') }}">Upload</a></li>
                					<li><a href="#">Edit text</a></li>
                					<li><a href="#">Delete</a></li>
                				</ul>

                				<h4>Video</h4>
                				<ul>
                					<li><a href="#">Upload</a></li>
                					<li><a href="#">Edit text</a></li>
                					<li><a href="#">Delete</a></li>
                				</ul>
                				
                				<h4>News</h4>
                				<ul>
                					<li><a href="#">Create</a></li>
                					<li><a href="#">Edit</a></li>
                					<li><a href="#">Delete</a></li>
                				</ul>
                				
                			</div>
                			<div class="col-md-8">
                				
                			</div>
                		</div>
                	</div>    
                </div>
            </div>
        </div>
    </div>
</div>
@stop
