@extends('admin.index')

@section('admin_content')
<table class="table table-striped table-bordered" style="text-align: center;">
<tr>
	<td>WARNING!</td>
	<td>Action</td>
</tr>
<tr>
	<td>You are about to delete this {{ $message }}. Are you sure?</td>
	<td>
		<form method="post" action="{{ action($action) }}">
			<input type="hidden" name="id" value="{{ $item->id }}">
			<input class="btn btn-success" type="submit" value="Yes, I am.">
			<a class="btn btn-danger" href="{{ url()->previous() }}">Cancel</a>
			{{ csrf_field() }}
		</form>
		
	</td>
</tr>
</table>
@stop