@extends('admin.layout.main')
@section('main')

<form action="{{ route('variant.update',$detailvar->id)}}" style="margin-left:300px; margin-top:100px; width:500px" method="POST" enctype="multipart/form-data">
    @csrf <!-- cơ chế bảo mật của laravel -->
    @method('PUT')
    <h2>Sửa Biến Thể</h2>
    <div class="input-group flex-nowrap mt-3">

        <span class="input-group-text" >Ảnh</span>
        <input type="file" class="form-control" value="{{$detailvar->image}}" name="image" placeholder="Ảnh" >
    </div>
        <img src="{{ asset('uploads/product/'.$detailvar->image)}}" width="150px" alt="">
        <input type="hidden"  value="{{$detailvar->image}}" name="file">
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" > Số Lượng</span>
        <input type="number" class="form-control" name="quantity" value="{{$detailvar->quantity}}" placeholder="Số Lượng" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Màu Sắc</span>
        <input type="text" class="form-control" name="color" value="{{$detailvar->color}}" placeholder="Màu" >
    </div>
    <div class="input-group flex-nowrap mt-3 ">
        <button type="submit" class="btn btn-success">Sửa Biến Thể</button>
    </div>
</form>



@endsection
