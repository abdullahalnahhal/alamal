@php
$local = 'title_'.App::getLocale();
@endphp
@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.About Us'))
@push('css')
	
	<link href="{{asset("css/admin/".App::getLocale()."/lib/dropzone/dropzone.css")}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset("css/admin/".App::getLocale()."/lib/editor/editor.css")}}" />
@endpush
@section('content')
<!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	<form id="about-word" method="post" action="{{lRoute('admin.about.add-word')}}" enctype="multipart/form-data">
                		@csrf
	                    <h4 class="card-title">
	                    	<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}">@lang('admin/about.About Word')</span>
	                    	<button type="submit" id="save-word" class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}}" ><i class="ti-save" ></i> @lang('admin/about.Save')</button>
	                    	<br><br>
	                    </h4>
	                    <ul class="nav nav-tabs" role="tablist">
		                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#new-en-word" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('admin/all.en')</span></a> </li>
		                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#new-ar-word" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('admin/all.ar')</span></a> </li>
		                </ul>
		                <br>
		                <div class="tab-content tabcontent-border">
                        	<div id="new-en-word" class="tab-pane active">
		                        <textarea name="about-word-text-en" class="form-control" rows="15" placeholder="@lang('admin/about.Enter text') ..." style="height:200px">{{$word->text_en??""}}</textarea>
	                        </div>
	                        <div id="new-ar-word" class="tab-pane">
		                        <textarea name="about-word-text-ar" class="form-control" rows="15" placeholder="@lang('admin/about.Enter text') ..." style="height:200px">{{$word->text_ar??""}}</textarea>
	                        </div>
                        </div>
	                </form>
                </div>
            </div>
        </div>
    </div>
	    <div class="row" >
	    	<div class="col-12" >
	    		<div class="card" >
	    			<div class="card-body">
	    				<h4 class="card-title">
		    				<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}">@lang('admin/about.About Sections')</span>
		    				<button class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}}" id="add-section" ><i class="ti-plus" ></i> @lang('admin/about.Add')</button>
			                <br><br>
		    			</h4>
		    			<hr>
		    			<div class="row">
			    			<div class="col-8">
			    				<form method="post" action="{{lRoute('admin.about.add-section')}} " id="add-section-form">
			    					@csrf
			    					<input type="hidden" id='completed' name="completed" value="0">
                        			<input type="hidden" id='file-name' name="file-name" value="">
			    					<div class="vtabs customvtab col-12">
					    				<ul class="nav nav-tabs tabs-vertical" role="tablist">
			                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#sec-en" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('admin/all.en')</span> </a> </li>
			                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sec-ar" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('admin/all.ar')</span></a> </li>
			                            </ul>
			                            <div class="tab-content">
			                            	<div id="sec-en" class="tab-pane active">
			                            		<div class="col-12 row p-0">
								    				<div class="col-4 pt-2 "><b>@lang('admin/about.Section Title')</b></div>
								    				<div class="col-8 pr-0 mr-0"><input type="text" name="section-title-en" class='form-control' placeholder="@lang('admin/about.Section Title')" required=""></div>
								    			</div>
								    			<div class="col-12 row p-0" >
								    				<div class="col-4 pt-2 "><b>@lang('admin/about.Section Content')</b></div>
								    				<div class="col-8 pr-0 mr-0">
								    					<textarea name="section-content-en"  class="form-control" rows="15" placeholder="Enter text ..." style="height:200px"></textarea>
								    				</div>
								    			</div>
			                            	</div>
			                                <div id="sec-ar" class="tab-pane">
			                                	<div class="col-12 row p-0">
								    				<div class="col-4 pt-2 "><b>@lang('admin/about.Section Title')</b></div>
								    				<div class="col-8 pr-0 mr-0"><input type="text" name="section-title-ar" class='form-control' placeholder="@lang('admin/about.Section Title')" required=""></div>
								    			</div>
								    			<div class="col-12 row p-0" >
								    				<div class="col-4 pt-2 "><b>@lang('admin/about.Section Content')</b></div>
								    				<div class="col-8 pr-0 mr-0">
								    					<textarea name="section-content-ar"  class="form-control" rows="15" placeholder="Enter text ..." style="height:200px"></textarea>
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
		    			<hr>
		    			@foreach($sections as $section)
		    			<div class="col-12 row" >
		    				<div class="col-8 text-{{getStyle(App::getLocale())['dir-full']}}"><h2 class="text-primary">{{$section->{$local} }}</h2></div>
		    				<div class="col-4 pt-2 text-{{getStyle(App::getLocale())['rev-full']}}"><a href="{{lRoute('admin.about.delete-section',['id' => $section->id])}}"><i class="ti-close"></i></a> <!-- <a href="javascript:void(0);" modal='section' class="view" post="{{url(App::getLocale().'/admin/about/update-section')}}/{{$section->id}}"" link="{{url(App::getLocale().'/admin/about/get-section')}}/{{$section->id}}"><i class="ti-eye"></i></a> --></div>
		    			</div>
		    			@endforeach
	    			</div>
	    		</div>
	    	</div>
	    </div>
<!-- The Modal -->
<div class="modal section" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">@lang('admin/about.Update Section')</h4>
        <i class="close ti-close pt-0" data-dismiss="modal"></i>
      </div>
		<form method="post" id="update-form" action="" >
      <!-- Modal body -->
      <div class="modal-body">
      	
      		@csrf
      		<input type="hidden" id="update-section-content" name="section-content">
      		<div class="col-12">
      			<input type="text" class="form-control" id='update-section-title' name="section-title" placeholder="@lang('admin/about.Section Title')">
      		</div>
      		<div class="col-12">
      			<div class="form-group" >
	    		<textarea id="update-section" class="form-control" rows="15" placeholder="Enter text ..." style="height:200px"></textarea>
      		</div>
      	
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger"><i class="ti-save"></i> @lang('admin/about.Save')</button>
        <a href='javascript:void(0);' class="btn btn-danger" data-dismiss="modal">@lang('admin/about.Close')</a>
      </div>
</form>
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
		function closeMdal() {
			$(".modal").modal('hide');
		}
		$(document).ready(function() {
			$(".textarea_editor").Editor();
			$("#update-section").Editor();
			$("#add-section .Editor-editor").keyup(function(event) {
				content = $(this).html().trim();
				$("#section-content").val(content);
			});
			$('#update-form .Editor-editor').keyup(function(event) {
				content = $(this).html().trim();
				$("#update-section-content").val(content);
			});
			$(".view").click(function(event) {
				link = $(this).attr('link');
				modal = $(this).attr('modal');
				post = $(this).attr('post');
				$("#update-form").attr('action', post);
				$.get(link, function(data) {
					$("."+modal).modal("show");
					$("#update-section-title").val(data.title)
					$("#update-section-content").val(data.text);
					$("#update-form .Editor-editor").html(data.text);
				});
			});
			$("#add-section").click(function(event) {
				$("#add-section-form").submit();
			});
		});
	</script>
@endpush