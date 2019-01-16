@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.Subscribes'))
@push('css')

<link href="{{asset("css/admin/lib/toastr/toastr.min.css")}}" rel="stylesheet">
@endpush
@section('content')
<!-- Start Page Content -->
	    <div class="row" >
	    	@foreach($subscribes as $subscribe)
	    	<div class="col-6 mt-2 {{(!$subscribe->reply)?"danger":"warning"}}" >
	    		<div class="card" >
	    			<div class="card-body">
	    				<h4 class="card-title">
		    				<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}" id="copied-{{$subscribe->id}}">{{$subscribe->content}}</span>
		    				<button class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}} text-white copy" num='{{$subscribe->id}}'><i class="fa fa-clone" ></i> @lang('admin/subscribes.Copy')</button>
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
@push('js')

<script type="text/javascript" src="{{asset("js/admin/lib/toastr/toastr.min.js")}}"></script>
<script type="text/javascript">
	$(".copy").click(function(event) {
		num = $(this).attr('num');
		$("#copied-"+num).select();
		document.execCommand('copy');
		toastr.info($("#copied-"+num).text(), '@lang("admin/subscribes.Subscriber Info Copies")',{
			"positionClass": "toast-top-{{getStyle(App::getLocale())['dir-full']}}",
			timeOut: 2000,
		    "closeButton": true,
		    "debug": false,
		    "newestOnTop": true,
		    "progressBar": true,
		    "preventDuplicates": true,
		    "onclick": null,
		    "showDuration": "300",
		    "hideDuration": "1000",
		    "extendedTimeOut": "1000",
		    "showEasing": "swing",
		    "hideEasing": "linear",
		    "showMethod": "fadeIn",
		    "hideMethod": "fadeOut",
		    "tapToDismiss": false
		});
	});
</script>
@endpush