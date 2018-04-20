@extends('template')

@section('content')
<div class="container-fluid container-edit closet-container">
		<div class="row">
			<div class="col-12">
				<div class="logo text-right">
				<!-- <a href="">
					<img src="img/Penguins.jpg" width="80px" height="80px" class="rounded back-img my-4" alt="">
				</a> -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-12">
			@if(!$news->isEmpty())
				@foreach($news as $n)
					<div class="col-sm-6">
						<div class="card">
							<div class="news-item">
								<a href="{{ route('article', $n->id) }}">
									<div class="news-item__image-container">
										<!-- <img class="news-item__image-container__image img-fluid" src="" alt="gastro-1" > -->
										<img class="news-item__image-container__image img-fluid" src="data:image/png;base64, {{ $n->image }}" alt="blog-{{ $n->id }}">
										<div class="news-item__image-container__sticker">
											<div class="news-item__image-container__sticker-text">
												<span>{{ $n->title }} </span>
											</div>
										</div>
									</div>
									<h4 class="news-item__autor">{{ $n->user->name }}</h4>
									<h4 class="news-item__date">{{ date('d-m-Y', strtotime($n->date)) }}</h4>
								</a>
							</div>
						</div>
					</div>
				@endforeach
			@else
			<div class="col-sm-6">
				<div class="card">
					<div class="news-item">
						<a href="#">
							<div class="news-item__image-container">
								<img class="news-item__image-container__image img-fluid" src="images/news/news_1.jpg" alt="gastro-1" >
								<div class="news-item__image-container__sticker">
									<div class="news-item__image-container__sticker-text">
										<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
									</div>
								</div>
							</div>
							<h4 class="news-item__autor">Admin</h4>
							<h4 class="news-item__date">15/08/2016</h4>
						</a>
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection