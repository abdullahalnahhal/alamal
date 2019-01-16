@extends('admin.layouts.body')
@section('title', trans('admin/sidebar.News'))
@push('css')
	
	<link href="{{asset("css/admin/".App::getLocale()."/lib/dropzone/dropzone.css")}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset("css/admin/".App::getLocale()."/lib/editor/editor.css")}}" />
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
	    	<div class="col-12" >
	    		<div class="card" >
	    			<div class="card-body">
	    				<h4 class="card-title">
		    				<span class="text-danger pull-{{getStyle(App::getLocale())['dir-full']}}">@lang('admin/news.Add News')</span>
		    				<button class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}}" id="add" ><i class="ti-save" ></i> @lang('admin/achievements.Save')</button>
			                <br><br>
		    			</h4>
		    			<hr>
		    			<div class="row">
			    			<div class="col-9">
			    				<form method="post" action="{{lRoute('admin.news.add')}}" id="add-section-form">
			    					@csrf
			    					<input type="hidden" id='completed' name="completed" value="0">
                        			<input type="hidden" id='file-name' name="file-name" value="">
				    				<input type="hidden" id='hidden-content' name="content" value="">
				    				<div class="col-12 row p-0">
					    				<div class="col-2 pt-2"><b>@lang('admin/news.Title')</b></div>
					    				<div class="col-10 pr-0 mr-0"><input type="text" name="title" class='form-control' placeholder="@lang('admin/about.Section Title')" required=""></div>
					    			</div>
					    			<div class="col-12 row p-0" >
					    				<div class="col-2 pt-2 "><b>@lang('admin/news.Content')</b></div>
					    				<div class="col-10 pr-0 mr-0">
					    					<textarea id="content"  class="form-control" rows="15" placeholder="Enter text ..." style="height:200px"></textarea>
					    				</div>
					    			</div>
					    			<div class="col-12 row p-0">
					    				<div class="col-2 pt-2"><b>@lang('admin/news.Publish')</b></div>
					    				<div class="col-10 pr-0 mr-0 pt-2">
					    					<div class="custom-control custom-checkbox mr-sm-2 pull-{{getStyle(App::getLocale())['dir-full']}}">
												<input type="checkbox" class="custom-control-input" name="publish" id="customControlAutosizing" value="1">
												<label class="custom-control-label" for="customControlAutosizing"></label>
											</div>
					    				</div>
					    			</div>
				    			</form>
			    			</div>
			    			<div class="col-3">
			    				<div class="col-12 p-0 mb-4 text-right">
				    				<b>@lang('admin/news.Image')</b>
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
	    	@foreach($news as $post)
	        	@csrf
	        <!-- <div class="col-12 row danger"> -->
	        	<div class="col-12" >
		            <div class="card">
		                <div class="card-body">
		                	<span class="pt-2 pull-{{getStyle(App::getLocale())['dir-full']}}">
		                		<strong class="text-danger">{{$post->title}}</strong>
		                	</span>
		                    <a class="btn btn-danger pull-{{getStyle(App::getLocale())['rev-full']}}" href="{{url(App::getLocale()."/admin/news/delete")}}/{{$post->id}}"> <i class="ti-close"></i> @lang('admin/news.Delete') </a>
		                    <a class="btn btn-warning pull-{{getStyle(App::getLocale())['rev-full']}}" href="{{url(App::getLocale()."/admin/news/preview")}}/{{$post->id}}"> <i class="ti-eye"></i> @lang('admin/news.Preview') </a>
		                    <a class="btn btn-primary pull-{{getStyle(App::getLocale())['rev-full']}}" href="{{url(App::getLocale()."/admin/news/edit")}}/{{$post->id}}"> <i class="ti-pencil-alt"></i> @lang('admin/news.Edit') </a>
		                    @if(!$post->publish)
		                    <a class="btn btn-success pull-{{getStyle(App::getLocale())['rev-full']}}" href="{{url(App::getLocale()."/admin/news/publish")}}/{{$post->id}}"> <i class="ti-thumb-up"></i> @lang('admin/news.Publish') </a>
		                    @else
		                    <a class="btn btn-dark pull-{{getStyle(App::getLocale())['rev-full']}}" href="{{url(App::getLocale()."/admin/news/unpublish")}}/{{$post->id}}"> <i class="ti-thumb-down"></i> @lang('admin/news.Unpublish') </a>
		                	@endif
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
		$(document).ready(function() {
			$("#add").click(function(event) {
				event.stopPropagation();
				content = $(".Editor-editor").html();
				$("#hidden-content").val(content);
				$("#add-section-form").submit();
			});
		});
		$("#content").Editor();
	</script>
@endpush