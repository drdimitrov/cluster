@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('welcome.welcome') }}, {{ \Auth::user()->name }}</div>

                <div class="panel-body">
                    {{ trans('welcome.message') }}
                    <br/><br/>
                    <a href="/">{{ trans('welcome.link') }} <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
