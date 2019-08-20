@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/services.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/about_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', ucwords($new->title))
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset("storage/$new->image")}}" data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_content_inner">
                    <div class="home_title">{{ucwords($new->title)}}</div>
                    <div class="home_breadcrumbs pull-{{getStyle(App::getLocale())['dir-full']}}">
                        <ul>
                            <li><a href="{{url(App::getLocale())}}">@lang("website/header.Home")</a></li>
                            <li><a href="{{url(App::getLocale().'/fields')}}">@lang("website/header.Fields")</a></li>
                            <li>{{ucwords($new->title)}}</li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

    <div class="points">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-{{getStyle(App::getLocale())['dir-full']}}">
                        <div class="section_subtitle">@lang("website/all.take a look at our")</div>
                        <div class="section_title">{{ucwords($new->title)}}</div>
                        <div class="section_text">{!! $new->content !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
@push('js')
<script src="{{asset("plugins/greensock/TweenMax.min.js")}}"></script>
    <script src="{{asset("plugins/greensock/TimelineMax.min.js")}}"></script>
    <script src="{{asset("plugins/scrollmagic/ScrollMagic.min.js")}}"></script>
    <script src="{{asset("plugins/greensock/animation.gsap.min.js")}}"></script>
    <script src="{{asset("plugins/greensock/ScrollToPlugin.min.js")}}"></script>
    <script src="{{asset("js/about_custom.js")}}"></script>
@endpush