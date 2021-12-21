@extends('layouts.master')

@section('title')
	Manage
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<br>
			<div class="row">
				<div class="col-sm-3">
					<a class="btn btn-primary" href="/insert">Insert New Item</a>
				</div>
				<div class="col-sm-9">
					<form id="search_form">
						<div class="input-group">
							 <input type="text" class="form-control" placeholder="Enter text (Title or Description) here." id="txt_search">
							 <input type="button" class="btn btn-success" name="btn_search" id="btn_search" value="Search">
						</div>
					</form>
				</div>
				<div class="col-sm-2"></div>
			</div>

			<br>

			<table class="table table-bordered" id="mng-table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th >Description</th>
						<th>Image</th>
						<th>Date Created</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="searchBody">
					@forelse($items as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->title }}</td>
							<td>{{ $item->description }}</td>
							<td class="text-center"><img src="{{ $item->imagePath }}" height="150px"></td>
							<td class="text-center">{{ $item->created_at }}</td>
							<td class="text-center">
								<a class="actions btn btn-warning" href="/update/{{ $item->id }}">Edit</a>
								<a class="actions btn btn-danger" href="/delete/{{ $item->id }}">Delete</a>
							</td>
						</tr>
					@empty
					    <tr><td>No data found.</td></tr>
					@endforelse
					
				</tbody>
			</table>
		</div>
		<div class="col-sm-1"></div>
	</div>
@endsection()