<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<textarea name="description" class="ckeditor" id="editor1">This is my textarea to be replaced with CKEditor.</textarea>

	<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
	<script>
        CKEDITOR.config.filebrowserImageUploadUrl = '{!! route('uploadPhotoCkeditor').'?_token='.csrf_token() !!}';
        CKEDITOR.replace( 'editor1', {
	        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
	        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
	        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
	        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
	        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
	        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
   		});
    </script>
</body>
</html>