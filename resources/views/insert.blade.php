@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<form method="post" action="/insert"  id="insert_form" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" placeholder="Enter title" required="">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" rows="3" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="image">Image</label><br>
					<input type="file" class="form-control-file" name="image" required="">
				</div>
				<button type="submit" class="btn btn-success" id="insert_btn">Save</button>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
@endsection