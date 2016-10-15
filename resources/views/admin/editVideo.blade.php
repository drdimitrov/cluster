@extends('admin.index')

@section('admin_content')

<img src="http://img.youtube.com/vi/{{ $video->source }}/0.jpg"  width="300">

<form method="post" action="{{ url('/admin/videos/edit') }}" style="margin-top: 10px;">
	<input type="hidden" name="id" value="{{ $video->id }}">
	<div class="form-group">
		<label for="description">Description:</label>
		<textarea class="form-control" rows="3" name="description">{{ $video->description }}</textarea>
	</div>
	{{ csrf_field() }}
	<input type="submit" class="btn btn-default" value="Update">
	<a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
</form>


@stop