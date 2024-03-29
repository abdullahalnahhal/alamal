@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.Partners'))
@push('css')
	
	<link href="{{asset("css/admin/".App::getLocale()."/lib/dropzone/dropzone.css")}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset("css/admin/".App::getLocale()."/lib/editor/editor.css")}}" />
@endpush
@section('content')
<!-- Start Page Content -->
	    <div class="row" >
	    	<div class="col-12" >
	    		<div class="card" >
	    			<div class="card-body">
	    				<h4 class="card-title">
		    				<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}">@lang('admin/partners.Add Partner')</span>
		    				<button class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}}" id="add-section" ><i class="ti-save" ></i> @lang('admin/fields.Save')</button>
			                <br><br>
		    			</h4>
		    			<hr>
		    			<div class="row">
			    			<div class="col-8">
			    				<form method="post" action="{{lRoute('admin.partners.add')}}" id="add-section-form">
			    					@csrf
			    					<input type="hidden" id='completed' name="completed" value="0">
                        			<input type="hidden" id='file-name' name="file-name" value="">
                        			<div class="vtabs customvtab  col-12">
                        				<ul class="nav nav-tabs tabs-vertical" role="tablist">
			                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#sec-en" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('admin/all.en')</span> </a> </li>
			                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sec-ar" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('admin/all.ar')</span></a> </li>
			                            </ul>
			                            <div class="tab-content">
			                            	<div id="sec-en" class="tab-pane active">
			                            		<div class="col-12 row p-0">
								    				<div class="col-4 pt-2 "><b>@lang('admin/partners.Partner Name')</b></div>
								    				<div class="col-8 pr-0 mr-0"><input type="text" name="title-en" class='form-control' placeholder="@lang('admin/about.Section Title')" required></div>
								    			</div>
								    			<div class="col-12 row p-0" >
								    				<div class="col-4 pt-2 "><b>@lang('admin/partners.Partner Description')</b></div>
								    				<div class="col-8 pr-0 mr-0">
								    					<textarea name="content-en"  class="form-control" rows="15" placeholder="Enter text ..." style="height:200px" required></textarea>
								    				</div>
								    			</div>
			                            	</div>
			                            	<div id="sec-ar" class="tab-pane ">
			                            		<div class="col-12 row p-0">
								    				<div class="col-4 pt-2 "><b>@lang('admin/partners.Partner Name')</b></div>
								    				<div class="col-8 pr-0 mr-0"><input type="text" name="title-ar" class='form-control' placeholder="@lang('admin/about.Section Title')" required></div>
								    			</div>
								    			<div class="col-12 row p-0" >
								    				<div class="col-4 pt-2 "><b>@lang('admin/partners.Partner Description')</b></div>
								    				<div class="col-8 pr-0 mr-0">
								    					<textarea name="content-ar"  class="form-control" rows="15" placeholder="Enter text ..." style="height:200px" required></textarea>
								    				</div>
								    			</div>
			                            	</div>
			                            </div>
                        			</div>
					    			
				    			</form>
			    			</div>
			    			<div class="col-4">
			    				<div class="col-12 p-0 mb-4 text-right">
				    				<b>@lang('admin/partners.Logo')</b>
				    			</div>
				    			<div class="col-12 p-0">
				    				<form method='post' action="{{lRoute('admin.home.slider.add')}}"  class="dropzone" style="height: 205px;">
					                    @csrf
					                    <div class="fallback">
					                       <input name="file" type="file" />
					                    </div>
					                </form>
				    			</div>
			    			</div>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
	    	@foreach($partners as $partner)
	        	@csrf
		        <div class="col-4" >
		            <div class="card">
		                <div class="card-body">
		                    <img src="{{asset("slider")}}/{{$partner->file_name}}" style="max-height: 180px;max-width:100%;">
		                </div>
		            </div>
		        </div>
		        <div class="col-4">
		            <div class="card">
		                <div class="card-body">
		                    <h4 class="card-title">@lang('admin/slider.Add Description')</h4>
		                    <form method="post" id="form-update-{{$partner->id}}" action="{{lRoute('admin.partners.update', ['id'=>$partner->id])}}">
		                    	@csrf
		                    	<ul class="nav nav-tabs" role="tablist">
				                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#partner-en-{{$partner->id}}" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('admin/all.en')</span></a> </li>
				                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#partner-ar-{{$partner->id}}" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('admin/all.ar')</span></a> </li>
				                </ul>
				                <div class="tab-content tabcontent-border">
				                	<div id="partner-en-{{$partner->id}}" class="tab-pane active">
				                    	<input type="text" name="title-en" class="form-control" placeholder="title" value="{{$partner->title_en}}">
				                        <textarea class=" form-control text-{{getStyle(App::getLocale())['dir-full']}}" name='content-en' id="description" rows="2" placeholder="Enter text ..." style="height:95px;text-align: left;">{{$partner->description_en}}</textarea>
				                	</div>
				                	<div id="partner-ar-{{$partner->id}}" class="tab-pane">
				                    	<input type="text" name="title-ar" class="form-control" placeholder="title" value="{{$partner->title_ar}}">
				                        <textarea class=" form-control text-{{getStyle(App::getLocale())['dir-full']}}" name='content-ar' id="description" rows="2" placeholder="Enter text ..." style="height:95px;text-align: left;">{{$partner->description_ar}}</textarea>
				                    </div>
				                </div>
		                    	
		                    </form>
		                </div>
		            </div>
		        </div>
		        <div class="col-4">
		            <div class="card">
		                <div class="card-body">
		                	<br>
		                	<br>
		                	<br>
		                	<a href="{{lRoute('admin.partners.delete', ['id'=>$partner->id])}}" class="btn btn-info  btn-block btn-addon">
		                		<i class="ti-close" ></i> @lang("admin/slider.Delete")
		                	</a>
		                    <button num='{{$partner->id}}' class="btn btn-block btn-addon btn-danger update ">
		                    	<i class="ti-pencil-alt" ></i>
		                    	@lang('admin/slider.Update')
		                    </button>
		                    <br>
		                	<br>
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
	<script src="{{asset("js/admin/lib/dropzone/dropzone.js")}}"></script>
	<script src="{{asset("js/admin/lib/html5-editor/wysihtml5-0.3.0.js")}}"></script>
    <script src="{{asset("js/admin/lib/html5-editor/bootstrap-wysihtml5.js")}}"></script>
	<script src="{{asset("js/admin/lib/editor/editor.js")}}"></script>
	<script>
		Dropzone.prototype.defaultOptions.success = function(file, response){
		 	$("#completed").val(1)
		 	$("#file-name").val(response.name)
		}
		$("#add-section").click(function(event) {
			$("#add-section-form").submit();
		});
		$(".update").click(function(event) {
			num = $(this).attr('num');
			$("#form-update-"+num).submit();
		});
	</script>
@endpush