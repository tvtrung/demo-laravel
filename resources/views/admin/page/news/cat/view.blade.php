<div class="info-style">
<p><strong>Tiêu đề: </strong>{{$row->title}}</p>
<p><strong>Slug: </strong>{{$row->slug}}</p>
<p><strong>Mô tả: </strong></p>
<p>{{$row->description}}</p>
<p><strong>Nội dung: </strong></p>
<p>{{$row->content}}</p>
<p><strong>SEO Title: </strong></p>
<p>{{$row->seo_title}}</p>
<p><strong>SEO Keyword: </strong></p>
<p>{{$row->seo_keyword}}</p>
<p><strong>SEO Description: </strong></p>
<p>{{$row->seo_description}}</p>
<p><strong>Hình ảnh: </strong></p>
<div><img src="/uploads/news/{{$row->photo}}" style="width:30%"></div>
<p></p>
<p><strong>Số lượt xem: </strong>{{$row->view}}</p>
<p><strong>Trạng thái: </strong>@if($row->status == 1) Hiện @else Ẩn @endif</p>
<p><strong>Thời gian tạo: </strong>{{$row->created_at}}</p>
<p><strong>Thời gian sửa: </strong>{{$row->updated_at}}</p>
</div>
<style type="text/css">
	.info-style p{
		margin-top: 0;
		margin-bottom:5px;
		font-size: 13px;
	}
</style>