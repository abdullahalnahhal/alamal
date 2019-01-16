@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.slider'))
@push('css')

	<link href="{{asset("css/admin/".App::getLocale()."/lib/dropzone/dropzone.css")}}" rel="stylesheet">
@endpush
@section('content')
<!-- Start Page Content -->
    <div class="row">
        <div class="col-6">
           <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('admin/slider.Add Slider Images')</h4>
                    <h6 class="card-subtitle">@lang('admin/slider.Please Add Your Image')
                    <form method='post' action="{{lRoute('admin.home.slider.add')}}"  class="dropzone">
                        @csrf
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('admin/slider.Add Description')</h4>
                    <h6 class="card-subtitle">@lang('admin/slider.Add Description To these Image')</h6>
                    <form method="post" id="form-description" action="{{lRoute('admin.home.slider.add.text')}}">
                    	@csrf
                    	<ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#new-en" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('admin/all.en')</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#new-ar" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('admin/all.ar')</span></a> </li>
                        </ul>
                        <div class="tab-content tabcontent-border">
                        	<div id="new-en" class="tab-pane active">
		                        <textarea class=" form-control" name='description-en' id="description" rows="2" placeholder="Enter text ..." style="height:95px"></textarea>
	                        </div>
	                        <div id="new-ar" class="tab-pane">
		                        <textarea class=" form-control" name='description-ar' id="description" rows="2" placeholder="Enter text ..." style="height:95px"></textarea>
	                        </div>
                        </div>
                        <br>                       
                        <input type="hidden" id='completed' name="completed" value="0">
                        <input type="hidden" id='file-name' name="file-name" value="">
                        <button id="add" class="btn btn-block btn-addon btn-danger">
                        	<i class="ti-plus" ></i>
                        	@lang('admin/slider.Save')
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @foreach($slides as $slider)
	        	@csrf
		        <div class="col-4" >
		            <div class="card">
		                <div class="card-body">
		                    <img src="{{asset("slider")}}/{{$slider->name}}" style="max-height: 180px;max-width:100%;">
		                </div>
		            </div>
		        </div>
		        <div class="col-4">
		            <div class="card">
		                <div class="card-body">
		                    <h4 class="card-title">@lang('admin/slider.Add Description')</h4>
		                    <h6 class="card-subtitle">@lang('admin/slider.Add Description To these Image')</h6>
		                    <form method="post" id="form-update-description-{{$slider->id}}" action="{{lRoute('admin.home.slider.update', ['id'=>$slider->id])}}">
		                    	@csrf
		                    	<ul class="nav nav-tabs" role="tablist">
		                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#new-en-{{$slider->id}}" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('admin/all.en')</span></a> </li>
		                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#new-ar-{{$slider->id}}" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('admin/all.ar')</span></a> </li>
		                        </ul>
		                        <div class="tab-content tabcontent-border">
		                        	<div id="new-en-{{$slider->id}}" class="tab-pane active">
				                        <textarea class="form-control text-{{getStyle(App::getLocale())['dir-full']}}" name='description-en' id="description" rows="2" placeholder="Enter text ..." style="height:95px;text-align: left;">{{$slider->description_en}}</textarea>
			                        </div>
			                        <div id="new-ar-{{$slider->id}}" class="tab-pane">
				                        <textarea class="form-control text-{{getStyle(App::getLocale())['dir-full']}}" name='description-ar' id="description" rows="2" placeholder="Enter text ..." style="height:95px;text-align: left;">{{$slider->description_ar}}</textarea>
			                        </div>
		                        </div>
		                        <br>
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
		                	<a href="{{lRoute('admin.home.slider.delete', ['id'=>$slider->id])}}" class="btn btn-info  btn-block btn-addon">
		                		<i class="ti-close" ></i> @lang("admin/slider.Delete")
		                	</a>
		                    <button num='{{$slider->id}}' class="btn btn-block btn-addon btn-danger update ">
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
<!-- End PAge Content -->
@endsection
@push('js')

	<script src="{{asset("js/admin/lib/dropzone/dropzone.js")}}"></script>
	<script src="{{asset("js/admin/lib/html5-editor/wysihtml5-0.3.0.js")}}"></script>
    <script src="{{asset("js/admin/lib/html5-editor/bootstrap-wysihtml5.js")}}"></script>
    <script src="{{asset("js/admin/lib/html5-editor/wysihtml5-init.js")}}"></script>

	<script type="text/javascript">
		Dropzone.prototype.defaultOptions.success = function(file, response){
		 	$("#completed").val(1)
		 	$("#file-name").val(response.name)
		}
		$("#add").click(function(event){
			event.preventDefault();
			if (!$("#completed").val() || !$("#file-name").val()) {
				alert("@lang("home.slider.Please Upload Image First")")
			}else{
				if (!$("#description").val().trim()) {
					$("#description").parent(".form-group").addClass('has-error').focusin(function(event) {
						$(this).removeClass('has-error');
					});
				}else{
					$("#form-description").submit();
				}
			}
			
		});
		$(".update").click(function(event) {
			num = $(this).attr('num');
			$("#form-update-description-"+num).submit();
		});
	</script>
@endpush