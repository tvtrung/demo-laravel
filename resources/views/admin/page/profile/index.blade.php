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
                    <span>User</span>
                </li>
            </ul>
        </div>
        <h3 class="page-title"> User Profile</h3>
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1" data-toggle="tab"> Account </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row profile-account">
                            <div class="col-md-3">
                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab_1-1">
                                            <i class="fa fa-cog"></i> Personal info </a>
                                        <span class="after"> </span>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_1-2">
                                            <i class="fa fa-picture-o"></i> Change Avatar </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_1-3">
                                            <i class="fa fa-lock"></i> Change Password </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="tab_1-1" class="tab-pane active">
                                        <form role="form" action="{{route('admin.profile.update_personal_info')}}" id="form-personal-info">
                                            <div class="form-group">
                                                <label class="control-label">Họ tên</label>
                                                <input type="text" name="fullname" placeholder="Họ tên" class="form-control fullname" value="{{Auth::user()->name}}"/> 
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Tên đăng nhập</label>
                                                <input type="text" name="user" placeholder="Tên đăng nhập" class="form-control" readonly="true" value="{{Auth::user()->user}}"/> 
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" name="email" placeholder="Email" class="form-control" value="{{Auth::user()->email}}"/> 
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Số đện thoại</label>
                                                <input type="text" name="phone" placeholder="Số đện thoại" class="form-control" value="{{Auth::user()->phone}}"/> 
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Địa chỉ</label>
                                                <input type="text" name="address" placeholder="Địa chỉ" class="form-control" value="{{Auth::user()->address}}"/> 
                                            </div>
                                            <div class="margiv-top-10">
                                                <button type="button" class="btn btn-success" id="save-personal-info">Save Changes</button>
                                            	<button type="button" class="btn btn-default" onClick="window.location.reload()">Cancel</button>
                                            </div>
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                        </form>
                                    </div>
                                    <div id="tab_1-2" class="tab-pane">
                                        <form role="form" method="post" action="{{route('admin.profile.update_avatar')}}" enctype="multipart/form-data" id="form-avatar">
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="height: 150px;">
                                                        <img src="/uploads/admin/{{Auth::user()->photo}}" alt="" /> </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                    <div>
                                                        <span class="btn default btn-file">
                                                            <span class="fileinput-new"> Select image </span>
                                                            <span class="fileinput-exists"> Change </span>
                                                            <input type="file" name="avatar" class="avatar"> 
                                                        </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top-10">
                                                 <button type="submit" class="btn btn-success">Save Changes</button>
                                                <a href="javascript:;" class="btn default" onClick="window.location.reload()"> Cancel </a>
                                            </div>
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                        </form>
                                    </div>
                                    <div id="tab_1-3" class="tab-pane">
                                        <form role="form" action="{{ route('admin.profile.update_password') }}" method="post" id="form-change-password">
                                            <div class="form-group">
                                                <label class="control-label">Current Password</label>
                                                <input type="password" class="form-control" name="current_password" /> 
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input type="password" class="form-control" name="new_password"/> 
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Re-type New Password</label>
                                                <input type="password" class="form-control" name="re_new_password"/> 
                                            </div>
                                            <div class="margin-top-10">
                                                <button type="button" class="btn btn-success" id="save-password">Save Changes</button>
                                                <a href="javascript:;" class="btn default" onClick="window.location.reload()"> Cancel </a>
                                            </div>
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-9-->
                        </div>
                    </div>
                </div>
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
            <div class="modal-body"> Cập nhật thành công </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#save-personal-info').on('click', function(){
                var get_user_name = $('#form-personal-info .fullname').val();
				$.ajax({
					type:'POST',
					url: '{{ route('admin.profile.update_personal_info') }}',
					data: $('#form-personal-info').serialize(),
					success: function(html){
						$('.admin-name').html(get_user_name);
                        $('#modal-basic').modal('show');
					}
				});
			});
		});
	</script>

    <script type="text/javascript">
        $(document).ready(function(e){
            $("#form-avatar").on('submit', function(e){
                e.preventDefault();
                var get_avatar = $('#form-avata .avatar').val();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.profile.update_avatar') }}',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                        //Loading
                    },
                    success: function(html){
                        $('.admin-avatar').attr('src',html);
                        $('#modal-basic').modal('show');
                    }
                });
            });
        });
        </script>
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#save-password').on('click', function(){
                $.ajax({
                    type:'POST',
                    url: '{{ route('admin.profile.update_password') }}',
                    data: $('#form-change-password').serialize(),
                    success: function(html){
                        $('.modal-body').html(html);
                        $('#modal-basic').modal('show');
                    }
                });
            });
        });
    </script>
@endsection