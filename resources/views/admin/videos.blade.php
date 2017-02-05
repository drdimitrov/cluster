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
                            <p>Add new Video:</p>
                            <form class="upload-video" method="post" action="/admin/videos/upload" style="margin-bottom: 10px;">
                                <div class="form-group">
                                    <label for="video">Video:</label>
                                    <input class="form-control" type="text" name="video">
                                </div>

                                <div class="form-group">
                                  <label for="description">Description:</label>
                                  <textarea class="form-control" name="description" rows="5" id="description"></textarea>
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
                                    <td>Video</td>
                                    <td>Description</td>
                                    <td>Action</td>
                                </tr>
                                @foreach($videos as $video)
                                <tr>
                                    <td>
                                    <img src="https://img.youtube.com/vi/{{ $video->source }}/0.jpg"  width="80">
                                    </td>
                                    <td>{{ $video->description }}</td>
                                    <td>
                                        <a href="{{ url('/admin/videos/edit', $video->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ url('/admin/videos/delete', $video->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{ $videos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection

@section('scripts')
<script>
    
</script>
@endsection
