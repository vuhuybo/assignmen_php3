@extends('admin.layout.main')
@section('main')

<div class="row" style="margin-left: 250px; margin-top:100px;  margin-right:50px;">

<form action="{{ route('coupon.store')}}" method="POST">
    @csrf <!-- cơ chế bảo mật của laravel -->

    <h2>Thêm Khuyến Mãi</h2>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Code</span>
        <input type="text" class="form-control" name="code" placeholder="Code" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Discount</span>
        <input type="number" class="form-control" name="discount" placeholder="Discount" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Số Lượng Khuyến Mại</span>
        <input type="number" class="form-control" name="minimum" placeholder="Số Lượng Khuyến Mại" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Ngày Bắt đầu</span>
        <input type="date" class="form-control" name="start" placeholder="DD-MM-YYYY" id="cleave-date">
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Ngày Kết thúc</span>
        <input type="date" class="form-control" name="end" placeholder="DD-MM-YYYY" id="cleave-date">
    </div>

    <div class="input-group flex-nowrap mt-3 ">
        <button type="submit" class="btn btn-success">Thêm Khuyến Mại</button>
    </div>
</div>

</form>
</div>


@endsection
