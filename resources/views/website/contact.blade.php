@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/contact.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/contact_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', trans('website/header.Contact Us'))
@section('before-header')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset("images/services_background.jpg")}}" data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_content_inner pull-{{getStyle(App::getLocale())['dir-full']}}">
                    <div class="home_title">@lang("website/header.Contact Us")</div>
                    <div class="home_breadcrumbs pull-{{getStyle(App::getLocale())['dir-full']}}">
                        <ul>
                            <li><a href="{{lRoute('index')}}">@lang("website/header.Home")</a></li>
                            <li>@lang("website/header.Contact Us")</li>
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

    <div class="contact text-{{getStyle(App::getLocale())['dir-full']}}" dir="{{getStyle(App::getLocale())['dir']}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 contact_form_col">
                    <div class="section_title_container">
                        <div class="section_subtitle">@lang('website/all.take a look at our')</div>
                        <div class="section_title">@lang('website/contact.Get in touch')</div>
                    </div>
                    <div class="contact_form_container">
                        <form action="{{lRoute('contact.add')}}"  class="contact_form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="input_item" placeholder="@lang('website/contact.Your Name')" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="input_item" placeholder="@lang('website/contact.Your E-mail')" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" class="input_item" placeholder="@lang('website/contact.Message Subject')" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" class="input_item contact_message" name="message" placeholder="@lang('website/contact.Your Message')" data-error="Please, write us a message." required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button id="contact_btn" type="submit" class="contact_button trans_200" value="Submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection