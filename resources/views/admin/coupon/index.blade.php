@extends('admin.layout.main')
@section('main')

<div class="row" style="margin-left: 250px; margin-top:100px;  margin-right:50px;">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Danh sách Khuyến Mãi</h5>
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
                            <th data-ordering="false">Code</th>
                            <th data-ordering="false">Mã Số</th>
                            <th data-ordering="false">Số Lượng Khuyến Mãi</th>
                            <th data-ordering="false">id_types</th>
                            <th data-ordering="false">Ngày bắt đầu</th>
                            <th data-ordering="false">Ngày kết thúc</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($coupon as $cou)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{ $cou->id }}</td>
                            <td>{{ $cou->code }}</td>
                            <td>{{ $cou->discount }}</td>
                            <td>{{ $cou->minimum }}</td>
                            <td>{{ $cou->start }}</td>
                            <td>{{ $cou->end }}</td>
                            <td>

                                <form action="{{ route('coupon.destroy',$cou->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                                </form>

                                <a href="{{ route ('coupon.edit', $cou->id)}}"><button class="btn btn-info">Sửa</button></a>
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
