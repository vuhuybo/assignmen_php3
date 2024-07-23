@extends('admin.layout.main')
@section('main')

<div class="row" style="margin-left: 250px; margin-top:100px;  margin-right:50px;">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Danh sách Sản Phẩm</h5>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th>
                            <th data-ordering="false">ID</th>
                            <th data-ordering="false">Tên Sản Phẩm</th>
                            <th data-ordering="false">Giá</th>
                            <th data-ordering="false">Số Lượng</th>
                            <th data-ordering="false">Ngày Nhập</th>
                            <th data-ordering="false">Mô Tả</th>
                            <th data-ordering="false">Ảnh Sản Phẩm</th>
                            <th data-ordering="false">Danh mục Sản Phẩm</th>
                            <th data-ordering="false">Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($product as $pro)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{ $pro->id }}</td>
                            <td>{{ $pro->name_product }}</td>
                            <td>{{ $pro->price }}</td>
                            <td>{{ $pro->quantity }}</td>
                            <td>{{ $pro->date_time }}</td>
                            <td>{{ $pro->describe }}</td>
                            <td><img src="{{ asset('uploads/product/'.$pro->image)}}" width="140px" alt=""></td>
                            <td>{{ $pro->name }}</td>
                            <td>

                                <form action="{{ route('product.destroy',$pro->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                                </form>

                                <a href="{{ route ('product.edit', $pro->id)}}"><button class="btn btn-info">Sửa</button></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
@endsection
