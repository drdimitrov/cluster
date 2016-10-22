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
                            <p>Add News Item:</p>
                            <form class="upload-video" method="post" action="/admin/news/upload" style="margin-bottom: 10px;">
                            	<div class="form-group">
                                    <label for="picture">Select picture:</label>
                                    <select class="form-control" id="picture" name="picture">
                                        <option value="0">None</option>
                                    	@foreach($images as $image)
                                    	<option value="{{$image->id}}">{{$image->description}}</option>
                                    	@endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title_bg">Title BG:</label>
                                    <input class="form-control" type="text" name="title_bg">
                                </div>

                                <div class="form-group">
                                    <label for="title_en">Title EN:</label>
                                    <input class="form-control" type="text" name="title_en">
                                </div>

                                <div class="form-group">
                                  <label for="content_bg">Content BG:</label>
                                  <textarea class="form-control" name="content_bg" rows="5" id="content"></textarea>
                                </div>

                                <div class="form-group">
                                  <label for="content_en">Content EN:</label>
                                  <textarea class="form-control" name="content_en" rows="5" id="content"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-default">Upload</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered" style="text-align: center;">
                                <tr>
                                    <td class="col-md-2">Title</td>
                                    <td>Content</td>
                                    <td class="col-md-3">Action</td>
                                </tr>
                                @foreach($news as $item)
                                <tr>                                   
                                    <td>{{ str_limit($item->title_bg, 50, '...') }}</td>
                                    <td>{{ str_limit($item->content_bg, 150, '...') }}</td>
                                    <td>
                                        <a href="{{ url('/admin/news/edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ url('/admin/news/delete', $item->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection
