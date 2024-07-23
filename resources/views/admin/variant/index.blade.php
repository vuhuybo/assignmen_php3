@extends('admin.layout.main')
@section('main')

<div class="row" style="margin-left: 250px; margin-top:100px;  margin-right:50px;">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Danh Mục Biến Thể</h5>
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
                            <th data-ordering="false">ID Sản Phẩm</th>
                            <th data-ordering="false">Ảnh</th>
                            <th data-ordering="false">Số Lượng</th>
                            <th data-ordering="false">Màu</th>
                            <th data-ordering="false">Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($variant as $var)

                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{ $var->id }}</td>
                            <td>{{ $var->product_id }}</td>
                            <td><img src="{{ asset('uploads/product/'.$var->image)}}" alt="" width="140px"></td>
                            <td>{{ $var->quantity }}</td>
                            <td>{{ $var->color }}</td>
                            <td>
                                <form action="{{ route('variant.destroy',$var->id)}} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                                </form>
                                <a href="{{ route('variant.edit', $var->id)}}" class="btn btn-info">Sửa</a>
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
