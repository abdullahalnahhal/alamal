@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.Downloads'))
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
		    				<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}">@lang('admin/downloads.Add Download File')</span>
		    				<button class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}}" id="add-section" ><i class="ti-save" ></i> @lang('admin/fields.Save')</button>
			                <br><br>
		    			</h4>
		    			<hr>
		    			<div class="row">
			    			<div class="col-8">
			    				<form method="post" action="{{lRoute('admin.downloads.add')}}" id="add-section-form">
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
								    				<div class="col-4 pt-2 "><b>@lang('admin/downloads.File Name')</b></div>
								    				<div class="col-8 pr-0 mr-0"><input type="text" name="file-en" class='form-control' placeholder="@lang('admin/about.Section Title')" required=""></div>
								    			</div>
								    			<div class="col-12 row p-0" >
								    				<div class="col-4 pt-2 "><b>@lang('admin/downloads.File Description')</b></div>
								    				<div class="col-8 pr-0 mr-0">
								    					<textarea name="description-en"  class="form-control" rows="15" placeholder="Enter text ..." style="height:200px"></textarea>
								    				</div>
								    			</div>
			                            	</div>
			                                <div id="sec-ar" class="tab-pane">
								    			<div class="col-12 row p-0">
								    				<div class="col-4 pt-2 "><b>@lang('admin/downloads.File Name')</b></div>
								    				<div class="col-8 pr-0 mr-0"><input type="text" name="file-ar" class='form-control' placeholder="@lang('admin/about.Section Title')" required=""></div>
								    			</div>
								    			<div class="col-12 row p-0" >
								    				<div class="col-4 pt-2 "><b>@lang('admin/downloads.File Description')</b></div>
								    				<div class="col-8 pr-0 mr-0">
								    					<textarea name="description-ar"  class="form-control" rows="15" placeholder="Enter text ..." style="height:200px"></textarea>
								    				</div>
								    			</div>
			                                </div> 
			                            </div>
					    			</div>
				    				
				    			</form>
			    			</div>
			    			<div class="col-4">
			    				<div class="col-12 p-0 mb-4 text-right">
				    				<b>@lang('admin/about.Info Graphic Attachments')</b>
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
	    	@foreach($downloads as $file)
	        	@csrf
	        <!-- <div class="col-12 row danger"> -->
	        	<div class="col-12" >
		            <div class="card">
		                <div class="card-body">
		                	<span class="pt-2 pull-{{getStyle(App::getLocale())['dir-full']}}">
		                		<strong class="text-danger">{{$file->file_name_ar}}</strong>
		                	</span>
		                    <a class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}}" href="{{lRoute('admin.downloads.delete', ['id'=>$file->id])}}"> <i class="ti-close"></i> @lang('admin/news.Delete') </a>
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