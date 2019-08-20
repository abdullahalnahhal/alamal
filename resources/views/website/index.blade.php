@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('styles/'.App::getLocale().'/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
@endpush
@extends('website.layout.body')
@section('title', trans('website/header.Home'))
@section('before-header')
<div class="home_slider_container">
    <!-- Home Slider -->
    <div class="owl-carousel owl-theme home_slider">
        <!-- Slider Item -->
        @foreach(App\Slider::all() as $slider)
        <div class="owl-item">
            <div class="slider_background" style="background-image:url({{asset("storage")}}/{{$slider->name}})">
            </div>
            <div class="home_slider_content text-center">
                <!-- <h1>A new World is coming</h1> -->
                <div class="home_slider_text">{{$slider->{'description_'.App::getLocale()} }}</div>
                <!-- <div class="link_button home_slider_button"><a href="#">read more</a></div> -->
            </div>
        </div>
        @endforeach
    </div>
    <div class="home_slider_nav home_slider_prev d-flex flex-column align-items-center justify-content-center"><img
            src="{{asset("images/arrow_l.png")}}" alt=""></div>
    <div class="home_slider_nav home_slider_next d-flex flex-column align-items-center justify-content-center"><img
            src="{{asset("images/arrow_r.png")}}" alt=""></div>
</div>
@endsection
@section('content')
<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="row" dir="{{getStyle(App::getLocale())['dir']}}">
            <div class="col-lg-6">
                <div class="intro_image text-lg-right text-center"><img src="{{asset("images/logo.jpg")}}" alt=""></div>
            </div>
            <div class="col-lg-6 text-{{getStyle(App::getLocale())['dir-full']}}">
                <div class="intro_content">
                    <div class="intro_title_container">
                        <div class="intro_subtitle">@lang('website/all.take a look at our')</div>
                        <h1 class="intro_title">@lang("website/about.Who Are We ... ?")</h1>
                    </div>
                    <div class="intro_text">
                        <p>
                            {{\App\TextWord::find(1)->{'text_'.App::getLocale()}??"" }}
                        </p>
                    </div>
                    <div class="link_button intro_button"><a href="{{lRoute('about')}}">@lang("website/all.Read
                            More")</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services -->
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Testimonials Slider -->
                <div class="services_slider_container">
                    <div class="owl-carousel owl-theme services_slider">
                        @foreach(App\Fields::all() as $field)
                        <!-- Services Item -->
                        <div class="owl-item">
                            <div class="services_item d-flex flex-column align-items-center justify-content-center">
                                <div class="services_item_bg"></div>
                                <div class="services_icon"><img class="svg rounded-circle"
                                        src="{{asset("storage")}}/{{$field->file_path}}" alt=""
                                        style='width:100%!important'></div>
                                <div class="services_title">{{$field->{'title_'.App::getLocale()} }}</div>
                                <p class="services_text">
                                    {{str_limit($field->{'description_'.App::getLocale()} , 100, ' ...')}} </p>
                                <div class="services_link"><a
                                        href="{{lRoute('fields.view', ['id'=>$field->title_en])}}">@lang("website/all.Read
                                        More")</a></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div
                        class="services_nav services_prev d-flex flex-column align-items-center justify-content-center">
                        <img src="{{asset("images/arrow_l.png")}}" alt=""></div>
                    <div
                        class="services_nav services_next d-flex flex-column align-items-center justify-content-center">
                        <img src="{{asset("images/arrow_r.png")}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Info -->
<div class="info">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">@lang('website/all.take a look at our')</div>
                    <div class="section_title">@lang('website/all.Products')</div>
                </div>
            </div>
        </div>
        <div class="row info_row">
            @foreach(App\Products::all() as $product)
            <!-- Info Item -->
            <div class="col-lg-4 info_col">
                <div class="info_item text-center">
                    <div class="info_image"><img src="{{asset("storage")}}/{{$product->file_path}}" alt=""
                            class='rounded-circle'></div>
                    <div class="info_title">{{$product->{'title_'.App::getLocale()} }}</div>
                    <div class="info_text">
                        <p>{{str_limit($product->{'description_'.App::getLocale()}, 100, '...') }}</p>
                    </div>
                </div>
                <br>
                <div class="news_button offset-3"><a
                        href="{{lRoute('products.view', ['id'=>$field->title_en])}}">@lang("website/all.Read More")</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- News -->
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">@lang('website/all.take a look at our')</div>
                    <div class="section_title">@lang('website/all.News')</div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            @foreach(App\News::all() as $news)
            <!-- News Item -->
            <div class="col-lg-4 news_col">
                <div class="news_item">
                    <div class="news_image">
                        <img src="{{asset("storage")}}/{{$news->image}}" style='width:100%'>
                    </div>
                    <div class="news_content">
                        <div class="news_title">{{$news->title}}</div>
                    </div>
                    <div class="news_button"><a
                            href="{{lRoute('news.view', ['id'=>$field->title_en])}}">@lang("website/all.Read More")</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Logos -->

<div class="logos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">@lang('website/all.take a look at our')</div>
                    <div class="section_title">@lang('website/all.Partners')</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Clients Slider -->

                <div class="clients_slider_container">
                    <div class="owl-carousel owl-theme clients_slider">
                        @foreach(App\Partners::all() as $partner)
                        <!-- Slider Item -->
                        <a href='{{lRoute('partners.view', ['id'=>$partner->title_en])}}'>
                            <div class="owl-item clients_item">
                                <img src="{{asset("storage")}}/{{$partner->file_path}}" alt="">
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
@endsection
@push('js')
<!-- Active js -->
<script src="{{asset('js/custom.js')}}"></script>
@endpush
