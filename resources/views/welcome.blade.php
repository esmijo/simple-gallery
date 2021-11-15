@extends('layouts.master')

@section('content')
    <h1 class="jumbotron text-center">Simple Gallery</h1>
    <div class="row">
    	<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="gallery-container">
				@forelse($items as $i => $item)
					<div class="gallery-inner">
						<!-- <div class="gallery-item" style="background-image: url({{ $item->imagePath }}); background-position:center; background-repeat:no-repeat; background-size:cover;"> -->
						<!-- <div class="gallery-item"> -->
							<!-- <img class="gallery-image" src="{{ $item->imagePath }}">
							<div class="details">
								<h2 class="image-details image-title">{{ $item->title }}</h2>
								<h4 class="image-details image-desc">{{ $item->description }}</h4>
							</div> -->
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

			<!-- <div class="gallery-grid">
				@forelse($items as $i => $item)
					<img src="{{ $item->imagePath }}" alt="Avatar" class="image">
					<div class="middle">
					    <div class="text">
					    	<h2>{{ $item->title }}</h2>
							<h4>{{ $item->description }}</h4>
					    </div>
					</div>
				@empty
					<h4>No data found.</h4>
				@endforelse
			</div> -->

<!-- 			<ul>
				<li>
					<img>
				</li>
				<li>
					<img>
				</li>
			</ul> -->

<!-- 			<div class="gallery-container">
				@forelse($items as $i => $item)
					<div class="gallery-item">
						<img class="image" src="{{ $item->imagePath }}">
						<div class="details">
							<h1>{{ $item->title }}</h1>
							<p>{{ $item->description }}</p>
						</div>
					</div>
					<div class="item"></div>
				@empty

				@endforelse


			</div>


			<div class="gallery-container">
				@forelse($items as $i => $item)
					<img class="gallery-image" src="{{ $item->imagePath }}">
				@empty

				@endforelse

				
			</div> -->

		</div>
    	<div class="col-sm-1"></div>
    </div>
@endsection()