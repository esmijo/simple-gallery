@extends('layouts.master')

@section('content')
    <h1 class="jumbotron text-center">Simple Gallery</h1>
    <div class="row">
    	<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="gallery-container">
				@forelse($items as $i => $item)
					<div class="gallery-inner">
							<figure class="gallery-item">
								<img class="gallery-image" src="{{ $item->imagePath }}">
								<div class="details">
									<h2>{{ $item->title }}</h2>
									<figcaption>{{ $item->description }}</figcaption>
								</div>
							</figure>
						<!-- </div> -->
					</div>
				@empty
					<h4>No data found.</h4>
				@endforelse
			</div>
		</div>
    	<div class="col-sm-1"></div>
    </div>
@endsection()