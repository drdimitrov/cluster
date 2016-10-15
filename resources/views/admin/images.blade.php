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

                    <script>
                        UPLOADCARE_LIVE = false;
                        UPLOADCARE_IMAGES_ONLY = true;
                        UPLOADCARE_CROP = 'free';
                    </script>
                    <p>Add new Image:</p>
                    {!! $api->widget->getScriptTag() !!}

                    <form class="upload-form" method="post" action="/admin/images/upload" style="margin-bottom: 10px;">
                        <div class="form-group">
                            {!! $api->widget->getInputTag('img_file') !!}
                        </div>

                        <div class="form-group description">
                          <label for="description">Description:</label>
                          <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-default btn-sm">Upload</button>
                        {{ csrf_field() }}
                    </form>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered" style="text-align: center;">
                                <tr>
                                    <td>Image</td>
                                    <td>Description</td>
                                    <td>Action</td>
                                </tr>
                                @foreach($images as $image)
                                <tr>
                                    <td><img src="{{ app('uploadcare')->getFile($image->url)->op('quality/lightest')->op('progressive/yes')->resize(80)->getUrl() }}"></td>
                                    <td>{{ $image->description }}</td>
                                    <td>
                                        <a href="{{ url('/admin/images/edit', $image->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ url('/admin/images/delete', $image->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{ $images->links() }}
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
    var widget = uploadcare.SingleWidget('[role=uploadcare-uploader]');

    widget.onUploadComplete(function(){
        $('form.upload-form .btn, form.upload-form .description').show();
    });
</script>
@endsection
