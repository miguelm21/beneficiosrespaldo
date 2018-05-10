@extends('template')

@section('content')
<div class="container container-edit closet-container">
	<div class="category-father">
		<div class="row my-4">
			<div class="col-lg-3 m-lg-auto d-flex col-sm-4 m-sm-auto col-12">
				<i class="{{ $category->iconweb }} category-father__icon fa-3x"></i>
				<h4 class=" category-father__title">{{ $category->name }}</h4>
			</div>
		</div>
		<div class="row">
			@foreach($benefits as $b)
			<div class="col-lg-3 ranking-item-father ranking-category">
				<div class="col-12 text-center">
					<h3 class="font-category">{{ $b->name }}</h3>
				</div>
				<div class="ranking-item">
					<a href="{{ route('benefit', $b->id) }}">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image" src="data:image/png;base64,{{ $b->image }}" alt="1"  style="width:100%">
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>{{ $b->percent }}%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="{{ route('benefit', $b->id) }}">
						<div class="ranking-item-back__image-container" >
							<img class="ranking-item-back__image-container__image" src="data:image/png;base64, {{ $b['image'] }}" alt="gastro-1"  style="width:100%">
							<div class="ranking-item-back__image-container__sticker" style="height:78%;">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>{{ $b->description }}</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>


<!-- 			<div class="col-lg-3 col-sm-4 col-">
				<div class="service-box">
					<a href="{{ route('benefit', $b->id) }}">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="data:image/png;base64,{{ $b->image }}" class="img-fluid" alt="">
								<h3 class="title-category">{{ $b->name }}</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>{{ $b->name }}</h3>
							<p>{{ $b->description }}</p>
							<span class="span-box">{{ $b->percent }}%</span>
						</div>
					</a>
				</div>
			</div> -->
			@endforeach
			{!!$benefits->render()!!}
			<!-- <div class="col-md-3 col-sm-6 ">
				<div class="service-box">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/gastro_1.jpg')}}" class="img-fluid" alt="">
							</div>
							<h3>Gastronomia</h3>
						</div>
						<div class="service-content">
							<h3>design</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 ">
				<div class="service-box">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/tourism_1.jpg')}}" class="img-fluid" alt="">
								<h3>Turismo</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>Descripción</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="service-box ">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/entertaiment_1.jpg')}}" class="img-fluid" alt="">
								<h3>Moda</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>Descripción</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="service-box">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/beauty_1.jpg')}}" class="img-fluid" alt="">
								<h3>Belleza</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>Descripción</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 ">
				<div class="service-box">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/news_1.jpg')}}" class="img-fluid" alt="">
								<h3>design</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>Descripción</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 ">
				<div class="service-box">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/fashion_1.jpg')}}" class="img-fluid" alt="">
								<h3>php</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>Descripción</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="service-box ">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/home_1.jpg')}}" class="img-fluid" alt="">
								<h3>Ui Developer</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>Descripción</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="service-box">
					<a href="">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="{{asset('img/category/entertaiment_1.jpg')}}" class="img-fluid" alt="">
								<h3>java script</h3>
							</div>
						</div>
						<div class="service-content">
							<h3>Descripción</h3>
							<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
							<span class="span-box">25%</span>
						</div>
					</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
@endsection