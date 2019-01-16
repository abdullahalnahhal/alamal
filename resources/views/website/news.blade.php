@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/news.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/news_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', 'News')
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{url('images/news_background.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">@lang('website/header.News')</div>
							<div class="home_breadcrumbs pull-{{getStyle(App::getLocale())['dir-full']}}">
								<ul>
									<li><a href="financial.html">@lang('website/header.Home')</a></li>
									<li>@lang('website/header.News')</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('content')
<!-- News -->

<div class="news">
	<div class="container">
		<div class="row">
			@foreach($news as $new)
			<!-- News Post -->
			<div class="col-lg-4 news_col">
				<div class="news_post">
					<div class="news_image"><img src="{{url('slider/'.$new->image)}}" alt=""></div>
					<div class="news_date d-flex flex-column align-items-center justify-content-center">
						<div class="news_month">{{$new->created_at->format('M')}}</div>
						<div class="news_day">{{$new->created_at->format('d')}}</div>
					</div>
					<div class="news_content">
						<div class="news_title">{{$new->title}}</div>
						<!-- <div class="news_text">
							<p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci.</p>
						</div> -->
					</div>
					<div class="news_button"><a href="{{lRoute('news.view', ['id'=>$new->id])}}">@lang('website/all.Read More')</a></div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection