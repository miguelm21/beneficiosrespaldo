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
			@if($new)
				<img class="news-item__image-container__image img-fluid" src="data:image/png;base64, {{ $new->image }}" alt="article-{{ $new->id }}">
				{{ $new->title }} <br>
				{{ $new->date }} <br>
				{{ $new->user->name}} <br>
				{{ $new->text }} <br>
			@endif
		</div>
	</div>
</div>
@endsection