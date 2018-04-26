@extends('template')

@section('content')
<div class="blog-father">
	<div class="container container-edit closet-container">
		<div class="row">
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
			<div class="col-sm-6 mt-4">
				<div class="blog-father__card-blog">
					<a href="#">
						<div class="blog-father__card-blog__container">
							<img class="blog-father__card-blog__container__image img-fluid" src="img/category/gastro_1.jpg" alt="gastro-1" >
							<div class="blog-father__card-blog__container__sticker">
								<div class="blog-father__card-blog__container__sticker__text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
					</a>
					<div class="blog-father__footer-card">
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__autor ml-4">Admiasdasdasdasdasdasdasdsan</h4>
							</div>
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__date mr-4">15/08/2016</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 mt-4">
				<div class="blog-father__card-blog">
					<a href="#">
						<div class="blog-father__card-blog__container">
							<img class="blog-father__card-blog__container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="blog-father__card-blog__container__sticker">
								<div class="blog-father__card-blog__container__sticker__text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
					</a>
					<div class="blog-father__footer-card">
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__autor ml-4">Admiasdasdasdasdasdasdasdsan</h4>
							</div>
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__date mr-4">15/08/2016</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 mt-4">
				<div class="blog-father__card-blog">
					<a href="#">
						<div class="blog-father__card-blog__container">
							<img class="blog-father__card-blog__container__image img-fluid" src="img/category/gastro_1.jpg" alt="gastro-1" >
							<div class="blog-father__card-blog__container__sticker">
								<div class="blog-father__card-blog__container__sticker__text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
					</a>
					<div class="blog-father__footer-card">
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__autor ml-4">Admiasdasdasdasdasdasdasdsan</h4>
							</div>
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__date mr-4">15/08/2016</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 mt-4">
				<div class="blog-father__card-blog">
					<a href="#">
						<div class="blog-father__card-blog__container">
							<img class="blog-father__card-blog__container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="blog-father__card-blog__container__sticker">
								<div class="blog-father__card-blog__container__sticker__text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
					</a>
					<div class="blog-father__footer-card">
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__autor ml-4">Admiasdasdasdasdasdasdasdsan</h4>
							</div>
							<div class="col-lg-6 col-sm-12">
								<h4 class="blog-father__footer-card__date mr-4">15/08/2016</h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			@endif
		</div>
	</div>
</div>
@endsection