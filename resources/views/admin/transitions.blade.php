@extends('admin.index')

@section('admin_content')
@if(Session::has('msg_success'))
    <div class="alert alert-success">{{ Session::get('msg_success') }}</div>
@endif
@if(Session::has('msg_danger'))
    <div class="alert alert-danger">{{ Session::get('msg_danger') }}</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ \Auth::user()->name }}</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Add Method Picture:</p>
                            <form  method="post" action="/admin/transitions" enctype="multipart/form-data" style="margin-bottom: 10px;">
                            	<div class="form-group">
                                    <label for="picture">Select picture:</label>
                                    <input type="file" name="picture" >
                                </div>

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input class="form-control" type="text" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input class="form-control" type="text" name="description">
                                </div>

                                <div class="form-group">
                                    <label for="transition">Transition:</label>
                                    <select class="form-control" id="transition" name="transition">
                                        @foreach($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach                                    	
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-default">Upload</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection
