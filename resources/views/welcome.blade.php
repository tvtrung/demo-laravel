<!doctype html>
<html lang="{{config('app.locale')}}">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>{{config('app.name')}}</title>
	    <link rel="stylesheet" href="{{mix('css/app.css')}}">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	    <script>
	        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
	    </script>
	</head>
	<body>
		<div id="vue-wrapper">
		<div class="container">
		    <div class="form-group row">
			    <div class="col-md-8">
			        <input type="text" class="form-control" id="name" name="name"
			            v-model="newItem.name" placeholder="Nhập tên sinh viên" required>
			        <p class="text-center alert alert-danger" v-bind:class="{ hidden: hasError }">Nhập tên sinh viên!</p>
			        <p class="text-center alert alert-success" v-bind:class="{ hidden: hasDeleted }">Xóa bản ghi thành công!</p>
			    </div>
			    <div class="col-md-4">
			        <button class="btn btn-primary" @click.prevent="createItem()"
			            id="name" name="name">
			            <span class="glyphicon glyphicon-plus"></span> Nhập liệu
			        </button>
			    </div>
			</div>
	    </div>

	    <div class="table table-borderless" id="table">
		    <table class="table table-borderless" id="table">
		        <thead>
		            <tr>
		                <th>Mã</th>
		                <th>Tên sinh viên</th>
		                <th>Hành động</th>
		            </tr>
		        </thead>
		        <tr v-for="item in items">
		            <td>@{{ item.id }}</td>
		            <td>@{{ item.name }}</td>
		            <td>Xóa</td>
		        </tr>
		    </table>
		</div>
		</div>
	    <script src="{{mix('js/app.js')}}"></script>
	</body>
</html>