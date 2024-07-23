@extends('admin.layout.main')
@section('main')

<div class="row" style="margin-left: 250px; margin-top:100px;  margin-right:50px;">

<form action="{{ route('product.update',$detail->id)}}" method="POST" enctype="multipart/form-data">
    @csrf <!-- cơ chế bảo mật của laravel -->
    @method('PUT')
    <h2>Sửa Sản Phẩm</h2>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Tên Sản Phẩm</span>
        <input type="text" class="form-control" value="{{$detail->name_product}}" name="name_product" placeholder="Tên Sản Phẩm" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Giá Sản Phẩm</span>
        <input type="number" class="form-control" name="price" value="{{$detail->price}}" placeholder="Giá Sản Phẩm" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Số Lượng Sản Phẩm</span>
        <input type="number" class="form-control" name="quantity" value="{{$detail->quantity}}" placeholder="Số Lượng Sản Phẩm" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Ngày Nhập</span>
        <input type="date" class="form-control" name="date_time" value="{{$detail->date_time}}" placeholder="DD-MM-YYYY" id="cleave-date">
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Mô Tả Sản Phẩm</span>
        <textarea class="form-control" name="describe" id="meassageInput" rows="3" placeholder="Mô Tả Sản Phẩm">{{$detail->describe}}</textarea>
    </div>
    <img src="{{ asset('uploads/product/'.$detail->image)}}" width="100px" alt="">
    <input type="hidden"  value="{{$detail->image}}" name="file">
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text">Ảnh Sản Phẩm</span>
        <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
    </div>
    </div>
    <div class="input-group flex-nowrap mt-3 "  style="margin-left: 260px; width: 1380px;">
        <select class="form-select" name="category_id">
            <option selected>Danh Mục Sản Phẩm</option>
            @foreach ($category as $ct)
                <option value="{{ $ct->id}}"{{ ($ct->id=== $detail->category_id)? 'selected': ''}}>{{ $ct->name}}</option>

            @endforeach


        </select>
    </div>

    <div class="input-group flex-nowrap mt-3 "  style="margin-left: 260px;">
        <button type="submit" class="btn btn-success">Sửa Sản Phẩm</button>
    </div>


</form>

</div>
@endsection
