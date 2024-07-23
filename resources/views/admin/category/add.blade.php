@extends('admin.layout.main')
@section('main')
<div class="main-content" style="margin-top: 100px">
   <form method="POST" action="{{ route('category.store')}}">
    @csrf
    <h1 class="">Thêm Danh Mục Sản Phẩm</h1>
    <div class="input-group flex-nowrap mt-3">
        <input name='name' type="text" class="form-control" placeholder="Thêm danh mục" aria-label="Username" aria-describedby="addon-wrapping">

    </div>
    <div class="mt-3">
        <button type="submit" class=" btn btn-success">Thêm</button>
    </div>


   </form>
</div>
@endsection
