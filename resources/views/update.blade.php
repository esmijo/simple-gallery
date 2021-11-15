@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<form method="post" action="/update"  id="update_form" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="hidden_id" value="{{ $item->id }}">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" value="{{ $item->title }}" required="">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" rows="3" required="">{{ $item->description }}</textarea>
				</div>
				<div class="form-group">
					<label for="image">Image</label><br>
					<input type="file" class="form-control-file" name="image">
				</div>
				<input type="text" name="" value="{{ $item->imagePath }}">
				<button type="submit" class="btn btn-success" id="insert_btn">Save</button>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
@endsection