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
                                    <label for="transition">Transition:</label>
                                    <select class="form-control" id="transition" name="transition">
                                        <option value="1">I-II</option>                                    	
                                        <option value="2">II-III</option>                                    	
                                        <option value="3">III-IV</option>                                    	
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
