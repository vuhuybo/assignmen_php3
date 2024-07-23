@extends('admin.layout.main')
@section('main')

<div class="row" style="margin-left: 250px; margin-top:100px;  margin-right:50px;">

<form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf <!-- cơ chế bảo mật của laravel -->

    <h2>Thêm Sản Phẩm</h2>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Tên Sản Phẩm</span>
        <input type="text" class="form-control" name="name_product" placeholder="Tên Sản Phẩm" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Giá Sản Phẩm</span>
        <input type="number" class="form-control" name="price" placeholder="Giá Sản Phẩm" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Số Lượng Sản Phẩm</span>
        <input type="number" class="form-control" name="quantity" placeholder="Số Lượng Sản Phẩm" >
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Ngày Nhập</span>
        <input type="date" class="form-control" name="date_time" placeholder="DD-MM-YYYY" id="cleave-date">
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text" >Mô Tả Sản Phẩm</span>
        <textarea class="form-control" name="describe" id="meassageInput" rows="3" placeholder="Mô Tả Sản Phẩm"></textarea>
    </div>
    <div class="input-group flex-nowrap mt-3">
        <span class="input-group-text">Ảnh Sản Phẩm</span>
        <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
    </div>

    <div class="input-group flex-nowrap mt-3 ">
        <select class="form-select" name="category_id">
            <option selected>Danh Mục Sản Phẩm</option>
            @foreach ($categories as $ct)
                <option value="{{ $ct->id}}">{{ $ct->name}}</option>

            @endforeach


        </select>
    </div>
    <div class="mt-3">
    <h5 class="form-label mt-3" >Tạo Biến Thể Cho Sản Phẩm</h5>
    <div class="input-group flex-nowrap " id="cloneRow">
        <input type="file" name="product_variant[0][image]" class="form-control"><input type="number" name="product_variant[0][quantity]" class="form-control" placeholder="Số Lượng Sản Phẩm"><input class="form-control" name="product_variant[0][color]" type="text" placeholder="Màu Sản Phẩm">
    </div>
    </div>

    <div class="input-group flex-nowrap mt-3 ">
        <button type="submit" class="btn btn-success">Thêm Sản Phẩm</button>
        <div id="addVarant" class="btn btn-warning" style="margin-left:10px">Thêm Biến Thể</div>
    </div>
</div>

</form>
</div>

<script>
var index = 1;
document.getElementById('addVarant').addEventListener('click', function() {
        var cloneRow = document.getElementById('cloneRow');
        var newClone = cloneRow.cloneNode(true);
        newClone.querySelectorAll('input').forEach(input => input.value = ''); // Reset các giá trị của các input

        let news =newClone.querySelectorAll('input');

        news[0].name = 'product_variant['+index+'][image]';
        news[1].name = 'product_variant['+index+'][quantity]';
        news[2].name = 'product_variant['+index+'][color]';
        index ++;


        // Thêm nút xóa vào row được clone
        var removeButton = document.createElement('button');
        removeButton.className = 'btn btn-danger remove';
        removeButton.type = 'button';
        removeButton.innerText = 'Xóa';
        removeButton.addEventListener('click', function() {
            newClone.remove();
        });

        var inputGroupAppend = document.createElement('div');
        inputGroupAppend.className = 'input-group-append';
        inputGroupAppend.appendChild(removeButton);

        newClone.appendChild(inputGroupAppend);

        cloneRow.parentNode.appendChild(newClone);
    });
</script>

@endsection
