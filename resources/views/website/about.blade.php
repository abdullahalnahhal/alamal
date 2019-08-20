@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/about.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/about_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', trans('website/header.About'))
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset("images/about.jpg")}}"
    data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_content_inner">
                    <div class="home_title">@lang('website/about.About Us')</div>
                    <div class="home_breadcrumbs pull-{{getStyle(App::getLocale())['dir-full']}}">
                        <ul>
                            <li><a href="{{lRoute('index')}}">@lang('website/header.Home')</a></li>
                            <li>@lang('website/about.About Us')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<!-- Features -->
<div class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 features_col">
                <div class="features_content">
                    <div class="section_title_container text-{{getStyle(App::getLocale())['dir-full']}}">
                        <div class="section_subtitle">@lang("website/all.take a look at our")</div>
                        <div class="section_title">@lang("website/about.Who Are We ... ?")</div>
                        <div class="section_text">
                            <p>{{$word->{'text_'.App::getLocale()}??""}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($sections as $section)
<!-- Features -->
<div class="features" dir="{{getStyle(App::getLocale())['dir']}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 features_col">
                <div class="features_content">
                    <div class="section_title_container text-{{getStyle(App::getLocale())['dir-full']}}">
                        <div class="section_subtitle">@lang("website/all.take a look at our")</div>
                        <div class="section_title">{{$section->{'title_'.App::getLocale()} }}</div>
                        <div class="section_text">
                            <p>{{$section->{'text_'.App::getLocale()} }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="features_images clearfix">
                    <div class="features_image_2"><img src="{{asset("storage")}}/{{$section->file_path}}" alt=""
                            style='width:100%'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
