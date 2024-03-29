@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/services.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/about_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', ucwords($achievement->{'title_'.App::getLocale()}))
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset("images/services_background.jpg")}}" data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_content_inner">
                    <div class="home_title">{{ucwords($achievement->{'title_'.App::getLocale()})}}</div>
                    <div class="home_breadcrumbs">
                        <ul>
                            <li><a href="{{lRoute('index')}}">@lang("website/header.Home")</a></li>
                            <li><a href="{{lRoute('achievements.index')}}">@lang("website/header.Achievements")</a></li>
                            <li>{{ucwords($achievement->{'title_'.cLang()})}}</li>
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
                    <div class="section_title_container">
                        <div class="section_subtitle">take a look at our</div>
                        <div class="section_title">{{ucwords($achievement->{'title_'.App::getLocale()})}}</div>
                        <div class="section_text">{{ucwords($achievement->{'description_'.App::getLocale()})}}</div>
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