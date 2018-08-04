@extends('admin.index')
@section('content')
	<div class="page-content-wrapper">
	    <div class="page-content">
	        <div class="page-bar">
	            <ul class="page-breadcrumb">
	                <li>
	                    <a href="{{route('admin.dashboard')}}">Home</a>
	                    <i class="fa fa-circle"></i>
	                </li>
	                <li>
	                    <span>Sửa Danh mục</span>
	                </li>
	            </ul>
	        </div>
	        <h3 class="page-title">Sửa Danh mục</h3>
	        <div class="row">
	        	<div class="col-md-12">
	        		@if(session('success'))
						<div class="alert alert-success update-alert">   
						<li>{{ session('success') }}</li>
						</div>
					@endif
					@if (count($errors) > 0)
						<div class="alert alert-danger">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</div>
					@endif
	        	</div>
	        </div>
	        <form action="{{route('admin.news.cat.update',['id'=>$row->id])}}" method="post" enctype="multipart/form-data">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="portlet light bordered">
	                        <div class="portlet-body form">
	                    		<div class="form-group">
	                                <label>Tiêu đề</label>
	                                <input type="text" class="form-control input-title" placeholder="Tiêu đề" name="title" value="{{$row->title}}" > 
	                            </div>
	                            <div class="form-group">
	                                <label>Slug</label>
	                                <input type="text" class="form-control" placeholder="Slug" name="slug" value="{{$row->slug}}" > 
	                            </div>
	                            <div class="form-group">
	                                <label>Mô tả</label>
	                                <textarea class="form-control" name="description">{{$row->description}}</textarea>
	                            </div>
	                            <div class="form-group">
	                                <label>Nội dung</label>
	                                <textarea class="form-control" name="content">{{$row->content}}</textarea>
	                            </div>
	                            <div class="form-group">
	                                <label>Chọn cấp</label>
	                                <select class="form-control" name="parent">
	                                	<option value="0">Cấp cao nhất</option>
	                                	{!!$html_option_edit!!}
	                                </select>
	                            </div>
	                            <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="height: 150px;">
                                            <img src="/uploads/news/{{$row->photo}}" alt="" /> </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                        <div>
                                            <span class="btn default btn-file">
                                                <span class="fileinput-new"> Select image </span>
                                                <span class="fileinput-exists"> Change </span>
                                                <input type="file" name="image"> 
                                            </span>
                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
	                                <div class="checkbox-list">
	                                    <label class="checkbox-inline">
	                                        <input type="checkbox" checked="checked" name="isActive"> Hiển thị?
	                                    </label>
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label>Vị trí</label>
	                                <input type="number" min="1" class="form-control" name="order" value="{{$row->order}}" style="width: 100px;">
	                            </div>
	                            <div class="form-group">
	                                <label>SEO Title</label>
	                                <input type="text" class="form-control" placeholder="Tiêu đề" name="seo_title" value="{{$row->seo_title}}" > 
	                            </div>
	                            <div class="form-group">
	                                <label>SEO Keyword</label>
	                                <textarea class="form-control" name="seo_keyword">{{$row->seo_keyword}}</textarea>
	                            </div>
	                            <div class="form-group">
	                                <label>SEO Descrition</label>
	                                <textarea class="form-control" name="seo_description">{{$row->seo_description}}</textarea>
	                            </div>
	                            <input type="hidden" name="id" value="{{$row->id}}">
	                            <div class="form-actions right">
	                                <button type="reset" class="btn default">Cancel</button>
	                                <button type="submit" class="btn green">Submit</button>
	                            </div>
	                        </div>
	                    </div>
		        	</div>
		        </div>
		        <input type="hidden" value="{{ csrf_token() }}" name="_token">
	    	</form>
	    </div>
	</div>
@endsection
@section('script')

@endsection