@extends('admin.index')
@section('style')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="/admin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
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
	                    <span>List Admin</span>
	                </li>
	            </ul>
	        </div>
	        <h3 class="page-title">List Admin</h3>
	        <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> 
                            </th>
                            <th class="text-center"> N.O </th>
                            <th> Username </th>
                            <th> Fullname </th>
                            <th> Email </th>
                            <th class="text-center"> Status </th>
                            <th> Created at </th>
                            <th> Updated at </th>
                            <th>  </th>
                        </tr>
                    </thead>
                    <tbody>
                    	@if(isset($data))
                    	@foreach($data as $row)
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td class="text-center"> 1 </td>
                            <td> {{$row->user}} </td>
                            <td> {{$row->name}} </td>
                            <td> {{$row->email}} </td>
                            <td class="text-center"> {{$row->status}} </td>
                            <td> {{$row->created_at}} </td>
                            <td> {{$row->updated_at}} </td>
                            <td> shuxer </td>
                        </tr>
                        @endforeach
                       @endif
                    </tbody>
                </table>
            </div>
	    </div>
	</div>
@endsection
@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/admin/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
	$(document).ready(function() {
	    $('#sample_1').DataTable();
	});
</script>
@endsection