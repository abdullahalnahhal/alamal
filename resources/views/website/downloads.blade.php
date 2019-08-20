@push('css')
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/contact.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/".App::getLocale()."/contact_responsive.css")}}">
@endpush
@extends('website.layout.body')
@section('title', trans('website/header.Downloads'))

@section('content')
<!-- Points -->
<br>
<br>
<br>
<br>
<br>

<div class="contact text-{{getStyle(App::getLocale())['dir-full']}}" dir="{{getStyle(App::getLocale())['dir']}}">
    <div class="container">
        <div class="row table-responsive">
            <table class="table table-striped table-bordered table-hover table-dark ">
                <!-- <caption>@lang('website/downloads.')</caption> -->
                <thead>
                    <tr>
                        <th>@lang('website/downloads.Name')</th>
                        <th>@lang('website/downloads.Descriptions')</th>
                        <th>@lang('website/downloads.Download')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($downloads as $file)
                    <tr>
                        <td>{{$file->file_path }}</td>
                        <td>{{$file->{'file_description_'.clang()} }}</td>
                        <td><a target="_blank" href="{{  lRoute('downloads.view', ['id'=>$file->id])}}"><i
                                    class="fa fa-download"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
