@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.Contact Us'))
@push('css')
		<style type="text/css">
		.danger{
			background: #ef5350;
		}
		.warning{
			background: #ffb22b;
		}
	</style>
@endpush
@section('content')
<!-- Start Page Content -->
	    <div class="row" >
	    	@foreach($messages as $message)
	    	<div class="col-12 mt-2 {{(!$message->reply)?"danger":"warning"}}" >
	    		<div class="card" >
	    			<div class="card-body">
	    				<h4 class="card-title">
		    				<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}">{{$message->name}} / </span>
		    				<span class="text-primary pull-{{getStyle(App::getLocale())['dir-full']}}"> {{$message->subject}}</span>
		    				<a class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}} text-white" href="{{url(App::getLocale()."/admin/contact-us/message")}}/{{$message->id}}"><i class="ti-eye" ></i> @lang('admin/contact-us.See')</a>
		    			</h4>
	    			</div>
	    		</div>
	    	</div>
	    	@endforeach
	    </div>
    </div>
  </div>
</div>
<!-- End PAge Content -->
@endsection