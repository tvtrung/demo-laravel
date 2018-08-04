@extends('admin.index')
@section('style')

@endsection
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
	                    <span>Danh mục bài viết</span>
	                </li>
	            </ul>
	        </div>
	        <h3 class="page-title">Danh mục bài viết</h3>
	        <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                            	<a href="{{route('admin.news.cat.create')}}">
	                                <button class="btn sbold green"> Thêm mới
	                                    <i class="fa fa-plus"></i>
	                                </button>
                            	</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-12">
                		@if(session('success'))
							<div class="alert alert-success update-alert">   
							<li>{{ session('success') }}</li>
							</div>
						@endif
                		@if(session('fail'))
							<div class="alert alert-danger update-alert">   
							<li>{{ session('fail') }}</li>
							</div>
						@endif
                	</div>
                </div>
                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;"> Thứ tự </th>
                            <th class="text-center"> Tiêu đề </th>
                            <th class="text-center" style="width: 100px;"> Số lượt xem </th>
                            <th class="text-center" style="width: 100px;"> Trạng thái </th>
                            <th style="width: 170px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    	@if($count_data != 0)
                    	{!! $html !!}
                        @else
                        <tr>
                        	<td class="text-center" colspan="5">Không có dữ liệu để hiển thị</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
	            </div>
            </div>
	    </div>
	</div>
	{{-- Modal --}}
	<div class="modal fade" id="modal-basic" tabindex="-1" role="basic" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	                <h4 class="modal-title">Thông báo</h4>
	            </div>
	            <div class="modal-body">Bạn có chắc muốn xóa mục này?</div>
	            <div class="modal-footer">
	                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
	                <a href="" class="a-delete"><button type="button" class="btn btn-danger">Xóa</button></a>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="modal fade" id="modal-basic-view" tabindex="-1" role="basic" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	                <h4 class="modal-title">Thông tin Danh mục</h4>
	            </div>
	            <div class="modal-body"></div>
	            <div class="modal-footer">
	                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng</button>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
@section('script')
{{--Ajax Hide/Show --}}
<script type="text/javascript">
	$(document).ready(function() {
		$('.click-change .bootstrap-switch-handle-on, .click-change .bootstrap-switch-handle-off, .click-change .bootstrap-switch-label, .click-change input').on('click', function(){
			var get_link = $(this).closest('.click-change').find('input').data('link');
			$.ajax({
				type:'GET',
				url: get_link,
				success: function(html){
					console.log("OK");
				},
			});
		});
	});
</script>

{{--Ajax View --}}
<script type="text/javascript">
	$(document).ready(function() {
		$('.click-view').on('click', function(){
			var	get_link = $(this).data('link');
			$.ajax({
				type:'GET',
				url: get_link,
				success: function(html){
					$('#modal-basic-view .modal-body').html(html);
					$('#modal-basic-view').modal('show');
				},
			});
		});
	});
</script>
{{--Ajax Delete --}}
<script type="text/javascript">
	$(document).ready(function() {
		$('.click-delete').on('click', function(){
			var	get_link = $(this).data('link');
			$('.a-delete').attr('href',get_link);
			$('#modal-basic').modal('show');
		});
	});
</script>

{{--Ajax Change Order --}}
<script type="text/javascript">
	$(":input.order-ajax").bind('keyup mouseup', function () {
          var get_link = $(this).data('link');
          var get_value = $(this).val();
          $.ajax({
          	type:"GET",
          	url: get_link,
          	data: 'value=' + get_value,
          	success:function(html){}
          });
	});
</script>
@endsection