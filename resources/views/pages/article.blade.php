@extends('template')

@section('content')
<div class="article-father">
	<div class="container container-edit closet-container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-10 m-sm-auto col-lg-8 m-lg-auto">
					<div class="newsbox">
						@if($new)
						<div class="newsheader">
							<img class="img-responsive text-center" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
						</div><!-- newsheader -->

						<div class="newscontent">
							<div class="newstitle"><h1>{{ $new->title }}</h1></div>
							<p class="newsdate">
								<span>{{ $new->date }}</span><span> por </span> <span>{{ $new->user->name }}</span>
							</p>
							<p>
								{!! $new->text !!}
							</p>
						</div><!-- newscontent -->
						<div class="newsfadeout"></div>
						<div class="newsfooter">
							<p class="pull-right">
								<button type="button" class="btn article-father__btn">Regresar</button>
							</p>
						</div><!-- newsfooter -->
						@endif
					</div><!-- newsbox -->
				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container-fluid -->
<!-- 		<div class="row">
			<div class="col-lg-8 m-lg-auto col-sm-8 m-sm-auto col-12">
				<div class="article-father__container">
					@if($new)
					<div class="article-father__container__container-image">
						<img class="article-father__container__container-image__image" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
						<h2 class="title">{{ $new->title }}</h2> <br>
						<h2 class="date">{{ $new->date }}</h2> <br>
						<h2 class="name">{{ $new->user->name}</h2>} <br>
						<div class="description">{!! $new->text !!}</div> <br>
					</div>
					@endif
				</div>
			</div>
		</div> -->
	</div>
</div>
@endsection