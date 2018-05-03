@extends('template')

@section('content')
<div class="article-father">
	<div class="container container-edit closet-container">
		<div class="row">
			<div class="col-lg-10 m-lg-auto">
				@if($new)
				<div class="article-father__body">
					<div class="article-father__body__title">
						<h2>{{ $new->title }}</h2>
					</div>
					<div class="article-father__body__divider">
						<div class="row">
							<div class="col-6 text-left">
								<span>{{ $new->user->name}}</span>
							</div>
							<div class="col-6 text-right">
								<span>{{ $new->date }}</span>
								<a class="" href="https://facebook.com/{{ $facebook->url}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a class="" href="https://twitter.com/{{ $twitter->url}}" target="_blank"><i class="fab fa-twitter"></i></a>
								<a class="" href="https://googleplus.com/{{ $googleplus->url}}" target="_blank"><i class="fab fa-google"></i></a>
								<a class="" href="https://instagram.com/{{ $instagram->url}}" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 m-lg-auto">
							<div class="article-father__body__image-container">
								<img class="article-father__body__image-container__image img-fluid" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
							</div>
						</div>
					</div>
					<div class="article-father__body__text">
						<p>{!! $new->text !!}</p>
					</div>
<!-- 					<div class="article-father__body__footer">
						<div class="row">
							<div class="col-12">
								<a href="#" class="btn">Atras</a>
							</div>
						</div>
					</div> -->
				</div>
				@endif
				<div class="row article-father__carousel">
					<div class="col-lg-12 m-lg-auto">
						<div class="row">
							<div class="col-12">
								<div class="article-father__carousel__section-title">
									<h3 class="article-father__carousel__section-title__title">Tambien te puede interesar:</h3>
								</div>
									<hr class="section__title-separator">
							</div>
						</div>
						<div class="owl-carousel owl-theme" id="owl-carousel-article">
							@if(!$news->isEmpty())
								@foreach($news as $ns)
									<div class="item text-center article-father__carousel__body">
										<a href="">
											<img class="article-father__carousel__body__image img-fluid" src="data:image/png;base64, {{ $ns->image }}" alt="new-{{ $ns->id }}">
											<div class="card-body">
												<h3 class="article-father__carousel__body__title">{{ $ns->title }}</h3>
												
												<p class="card-text"><small class="text-muted">{{ $ns->date }}</small></p>
											</div>
										</a>
									</div>
								@endforeach
							@else
								<div class="item text-center article-father__carousel__body">
									<a href="">
										<img class="article-father__carousel__body__image img-fluid" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
										<div class="card-body">
											<h3 class="article-father__carousel__body__title">{{ $new->title }}</h3>
											
											<p class="card-text"><small class="text-muted">{{ $new->date }}</small></p>
										</div>
									</a>
								</div>
								<div class="item text-center article-father__carousel__body">
									<a href="">
										<img class="article-father__carousel__body__image img-fluid" src="{{asset('img/category/tourism_1.jpg')}}" alt="">
										<div class="card-body">
											<h3 class="article-father__carousel__body__title">{{ $new->title }}</h3>
											
											<p class="card-text"><small class="text-muted">{{ $new->date }}</small></p>
										</div>
									</a>
								</div>
								<div class="item text-center article-father__carousel__body">
									<a href="">
										<img class="article-father__carousel__body__image img-fluid" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
										<div class="card-body">
											<h3 class="article-father__carousel__body__title">{{ $new->title }}</h3>
											
											<p class="card-text"><small class="text-muted">{{ $new->date }}</small></p>
										</div>
									</a>
								</div>
								<div class="item text-center article-father__carousel__body">
									<a href="">
										<img class="article-father__carousel__body__image img-fluid" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
										<div class="card-body">
											<h3 class="article-father__carousel__body__title">{{ $new->title }}</h3>
											
											<p class="card-text"><small class="text-muted">{{ $new->date }}</small></p>
										</div>
									</a>
								</div>
								<div class="item text-center article-father__carousel__body">
									<a href="">
										<img class="article-father__carousel__body__image img-fluid" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
										<div class="card-body">
											<h3 class="article-father__carousel__body__title">{{ $new->title }}</h3>
											
											<p class="card-text"><small class="text-muted">{{ $new->date }}</small></p>
										</div>
									</a>
								</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 		<div class="row">
			<div class="col-lg-8 m-lg-auto col-sm-8 m-sm-auto col-12">
				<div class="article-father__container">
					
					<div class="article-father__container__container-image">
						<img class="article-father__container__container-image__image" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
						<h2 class="title">{{ $new->title }}</h2> <br>
						<h2 class="date">{{ $new->date }}</h2> <br>
						<h2 class="name">{{ $new->user->name}</h2>} <br>
						<div class="description">{!! $new->text !!}</div> <br>
					</div>
					
				</div>
			</div>
		</div> -->
		@endsection