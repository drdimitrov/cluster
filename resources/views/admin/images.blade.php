@extends('layouts.app')

@section('content')
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

                    {!! $api->widget->getScriptTag() !!}

                    <form class="upload-form" method="post" action="/admin/images/upload">
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
