@extends('admin.layout.main')
@section('main')

<div class="table-responsive table-card" style="margin-left: 260px; margin-top:90px; width:1380px">
    <h2>Danh Sách Banner</h2>
    <table class="table align-middle table-nowrap mb-0">
        <thead class="table-light">
            <tr >
                <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                        <label class="form-check-label" for="cardtableCheck"></label>
                    </div>
                </th>
                <th scope="col">Id</th>
                <th scope="col">Tiêu Đề</th>
                <th scope="col">Nội Dung</th>
                <th scope="col">Ảnh Banner</th>
                <th scope="col">Đường Dẫn Banner</th>
                <th scope="col">Chức Năng</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($banner as $ba)
            <tr>

                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck01">
                        <label class="form-check-label" for="cardtableCheck01"></label>
                    </div>
                </td>
                <td>{{$ba->id}}</td>
                <td>{{$ba->title}}</td>
                <td>{{$ba->content}}</td>
                <td><img src="{{ asset('uploads/banner/'.$ba->image)}}" alt="" width="200px"></td>
                <td>{{$ba->link}}</td>
                <td>
                    <form action="{{ route('banner.destroy',$ba->id)}} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                    </form>
                    <a href="{{ route('banner.edit', $ba->id)}}" class="btn btn-info">Sửa</a>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    </style>
@endsection
