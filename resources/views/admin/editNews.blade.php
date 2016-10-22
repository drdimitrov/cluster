@extends('admin.index')

@section('admin_content')

<form method="post" action="{{ url('/admin/news/edit') }}" style="margin-top: 10px;">
	<input type="hidden" name="id" value="{{ $item->id }}">

	<div class="form-group">
		<label for="title_bg">Title BG:</label>
		<input class="form-control" type="text" name="title_bg" value="{{ $item->title_bg }}">
	</div>

	<div class="form-group">
		<label for="content_bg">Content BG:</label>
		<textarea class="form-control" rows="10" name="content_bg">{{ $item->content_bg }}</textarea>
	</div>

	<div class="form-group">
		<label for="title_en">Title EN:</label>
		<input class="form-control" type="text" name="title_en" value="{{ $item->title_en }}">
	</div>

	<div class="form-group">
		<label for="content_en">Content EN:</label>
		<textarea class="form-control" rows="10" name="content_en">{{ $item->content_en }}</textarea>
	</div>

	<div class="form-group">
		<label for="picture">Picture:</label>
		<select class="form-control" name="picture">
			<option value="0">None</option>
			@foreach($images as $image)
			<option value="{{ $image->id }}"
			@if(isset($item->image) && $item->image->id == $image->id) selected @endif
			>{{ $image->description }}</option>
			@endforeach
		</select>
	</div>

	{{ csrf_field() }}
	<input type="submit" class="btn btn-default" value="Update">
	<a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
</form>


@stop