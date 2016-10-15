@extends('admin.index')

@section('admin_content')
<img src="{{ app('uploadcare')->getFile($image->url)->op('quality/lightest')->op('progressive/yes')->resize(300)->getUrl() }}">

<form method="post" action="{{ url('/admin/images/edit') }}" style="margin-top: 10px;">
	<input type="hidden" name="id" value="{{ $image->id }}">
	<div class="form-group">
		<label for="description">Description:</label>
		<textarea class="form-control" rows="3" name="description">{{ $image->description }}</textarea>
	</div>
	{{ csrf_field() }}
	<input type="submit" class="btn btn-default" value="Update">
	<a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
</form>


@stop