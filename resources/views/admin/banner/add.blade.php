@extends('admin.layout.main')
@section('main')


<div class="row" style="margin-left: 250px; margin-top:100px;  margin-right:50px;">
<h1>Thêm mới Banner</h1>

<form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Tiêu Đề</span>
        <input type="text" class="form-control" name="title" placeholder="Tiêu Đề" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Nội Dung</span>
        <input type="text" class="form-control" name="content" placeholder="Nội Dung" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Ảnh Banner</span>
        <input type="file" class="form-control" name="image" placeholder="Ảnh Banner" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Đường Dẫn Banner</span>
        <input type="text" class="form-control" name="link" placeholder="Đường Dẫn Banner" >
    </div>
    <div class="input-group flex-nowrap mt-3 ">
        <button type="submit" class="btn btn-success">Thêm Banner</button>
    </div>
</form>

</div>


@endsection
