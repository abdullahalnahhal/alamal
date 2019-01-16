@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.Contact Us'))
@section('content')
<!-- Start Page Content -->
	    <div class="row" >
	    	<div class="col-12" >
	    		<div class="card" >
	    			<form method="post" action="{{lRoute('admin.contact-us.reply', ['id'=>$message->id])}}">
	    				@csrf
	    				<div class="card-body">
	    					<h4 class="card-title">
		    					<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}"><i class="fa fa-user-circle-o"></i> {{$message->name}} </span>
		    					<span class="text-primary pull-{{getStyle(App::getLocale())['rev-full']}}"> {{$message->email}} <i class="fa fa-envelope-open"></i></span>
		    					<br>
		    				</h4>
		    				<hr>
		    				<div class="row">
		    					<div class="col-12 table-bordered">
		    						<strong class="text-primary pull-{{getStyle(App::getLocale())['dir-full']}}"><code> <i class="fa fa-chevron-{{getStyle(App::getLocale())['rev-full']}}"></i> {{$message->subject}}</code></strong>
		    					</div>
		    					<div class="col-11 mt-2 mr-5 ml-5 table-bordered">
		    						<strong class="text-primary "><code class="text-dark"> {{$message->message}}</code></strong>
		    					</div>
		    					<div class="col-12 mt-2 ">
		    						<textarea  class="form-control text-{{getStyle(App::getLocale())['dir-full']}}" name="reply" placeholder="@lang("admin/contact-us.Reply Here")" style='height:150px'>{{$message->reply}}</textarea>
		    					</div>
		    					<div class="col-12 mt-2 ">
		    						<button class="btn btn-danger btn-block"><i class="fa fa-reply"></i> @lang("admin/contact-us.Reply")</button>
		    					</div>
		    				</div>
	    				</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
    </div>
  </div>
</div>
<!-- End PAge Content -->
@endsection
