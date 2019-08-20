@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/services.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/about_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', trans('website/header.Products'))
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset("images/services_background.jpg")}}" data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_content_inner">
                    <div class="home_title">@lang("website/header.Products")</div>
                    <div class="home_breadcrumbs pull-{{getStyle(App::getLocale())['dir-full']}}">
                        <ul>
                            <li><a href="{{lRoute('index')}}">@lang("website/header.Home")</a></li>
                            <li>@lang("website/header.Products")</li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<!-- Points -->

    <div class="points">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-{{getStyle(App::getLocale())['dir-full']}}">
                        <div class="section_subtitle">@lang("website/all.take a look at our")</div>
                        <div class="section_title">@lang("website/header.Products")</div>
                    </div>
                </div>
            </div>
            <div class="row points_container text-{{getStyle(App::getLocale())['dir-full']}}" dir="{{getStyle(App::getLocale())['dir']}}">
                @foreach($products as $product)                
                <!-- Service -->
                <div class="col-lg-4 col-md-6 point_col">
                    <div class="point clearfix">
                        <div class="point_image"><img class="rounded-circle" src="{{asset("storage/$product->file_path")}}" alt=""></div>
                        <div class="point_content">
                            <a href="{{lRoute('products.view', ['name'=>$product->title_en])}}"><div class="point_title">{{$product->{'title_'.App::getLocale()} }}</div></a>
                            <div class="point_text">
                                <p>
                                    {{str_limit($product->{'description_'.cLang()}, 100, ' ...')}} 
                                    <div class="services_link">
                                        <a href="{{lRoute('products.view', ['name'=>$product->title_en])}}">@lang("website/all.more")</a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection