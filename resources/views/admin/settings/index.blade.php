@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.Settings'))
@section('content')
<!-- Start Page Content -->
	    <div class="row" >
	    	<div class="col-12" >
	    		<div class="card" >
	    			<div class="card-body">
	    				<h4 class="card-title">
		    				<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}">@lang('admin/settings.Settings Details')</span>
			                <br><br>
		    			</h4>
		    			<hr>
		    			<form method="post" action="{{lRoute('admin.settings.update')}}" id="add-section-form">
			    			<div class="row">
				    			@csrf
				    			@foreach($contacts as $contact)
				    			<div class="col-4" >
				    				<div class="form-group" >
				    					<i class="{{$contact->icon}}"></i>
					    				{{$contact->title}}
					    			</div>
				    			</div>
				    			<div class="col-8">
				    				<div class="form-group" >
					    				<input type="string" placeholder="{{$contact->title}}" class="form-control" name="contact-{{$contact->id}}" value="{{$contact->value}}" >
					    			</div>
				    			</div>		
				    			@endforeach
			    			</div>
			    			<hr>
			    			<button class="btn btn-danger btn-block"><i class="ti-save" ></i> @lang('admin/fields.Save')</button>
		    			</form>
	    			</div>
	    		</div>
	    	</div>
	    </div>
    </div>
  </div>
</div>
<!-- End PAge Content -->
@endsection