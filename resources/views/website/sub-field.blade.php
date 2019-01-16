@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/about.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/about_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', ucwords($sub_field->title))
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset("slider/$sub_field->file_name")}}" data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_content_inner">
                    <div class="home_title">{{ucwords($sub_field->title)}}</div>
                    <div class="home_breadcrumbs pull-{{getStyle(App::getLocale())['dir-full']}}">
                        <ul>
                            <li><a href="{{url(App::getLocale())}}">@lang('website/header.Home')</a></li>
                            <li><a href="{{url(App::getLocale()."/fields/".$sub_field->field->title)}}">{{ucwords($sub_field->field->title)}}</a></li>
                            <li>{{ucwords($sub_field->title)}}</li>
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
            <div class="col-lg-12 features_col text-{{getStyle(App::getLocale())['dir-full']}}">
                <div class="features_content">
                    <div class="section_title_container">
                        <div class="section_subtitle">@lang("website/all.take a look at our")</div>
                        <div class="section_title">{{ucwords($sub_field->title)}}</div>
                        <div class="section_text">
                            <p>{{$sub_field->description??""}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection