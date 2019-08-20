@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".cLang()."/services.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".cLang()."/about_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', ucwords($partner->{'title_'.cLang()}))
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset("images/services_background.jpg")}}" data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_content_inner">
                    <div class="home_title">{{ucwords($partner->{'title_'.cLang()})}}</div>
                    <div class="home_breadcrumbs pull-{{getStyle(App::getLocale())['dir-full']}}">
                        <ul>
                            <li><a href="{{lRoute('index')}} {{url(cLang())}}">@lang("website/header.Home")</a></li>
                            <li><a href="{{lRoute('partners.index')}} {{url(cLang()."/partners")}}">@lang("website/header.Partners")</a></li>
                            <li>{{ucwords($partner->{'title_'.cLang()})}}</li>
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
                    <div class="section_title_container text-{{getStyle()['dir-full']}}">
                        <div class="section_subtitle">@lang("website/all.take a look at our")</div>
                        <div class="section_title">{{ucwords($partner->{'title_'.cLang()})}}</div>
                        <div class="section_text">{{ucwords($partner->{'description_'.cLang()})}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
        <!-- Services -->

    <div class="services" dir="{{getStyle(cLang())['dir']}}">
        <div class="services_background parallax-window" data-parallax="scroll" data-image-src="{{asset("images/services_background_2.jpg")}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row flex-wrap align-items-start justify-content-start">
                    @foreach($partner->products as $product)
                    <!-- Service -->
                    <div class="service text-{{getStyle(cLang())['dir-full']}}">
                        <div class="service_icon"><img src="{{asset("storage/$product->file_path")}}" class="svg" alt=""></div>
                        <div class="service_title">{{$product->{'title_'.cLang()} }}</div>
                        <div class="service_text">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="service_link"><a href="{{lRoute('products.view',['name'=>$product->title_en])}}">Read More</a></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
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