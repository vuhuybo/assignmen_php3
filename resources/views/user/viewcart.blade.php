@extends('layout.main')
@section('main')



    <!-- Breadcrumb start -->
    <div class="gi-breadcrumb mb-[40px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap m-0 p-[15px] border-[1px] border-solid border-[#eee] rounded-b-[5px] border-t-[0] gi_breadcrumb_inner">
                        <div class="min-[768px]:w-[50%] w-full px-[12px]">
                            <h2 class="gi-breadcrumb-title text-[#4b5966] block text-[15px] font-Poppins leading-[22px] font-semibold my-[0] mx-auto capitalize max-[767px]:mb-[5px] max-[767px]:text-center">Cart Page</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- Cart section -->
    <section class="gi-cart-section py-[40px] max-[767px]:py-[30px]">
        <h2 class="hidden">Cart Page</h2>
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap w-full">
                <!-- Sidebar Area Start -->


                <div class="gi-cart-rightside min-[992px]:w-[66.66%] w-full px-[12px] ">
                    <!-- cart content Start -->
                    <div class="gi-cart-content">
                        <div class="gi-cart-inner">
                            <div class="flex flex-wrap w-full">
                                <form action="#" class="w-full">
                                    <div class="table-content cart-table-content">
                                        <table class="w-full bg-[#fff] ">
                                            <thead class="max-[767px]:border-[0] max-[767px]:h-[1px] max-[767px]:m-[-1px] max-[767px]:overflow-hidden max-[767px]:p-[0] max-[767px]:absolute max-[767px]:w-[1px]">
                                                <tr class="bg-[#fff] border-b-[2px] border-solid border-[#eee]">
                                                    <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-left capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Product</th>
                                                    <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-left capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Price</th>
                                                    <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-center capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Quantity</th>
                                                    <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-left capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart as $ca)
                                                <tr data-id="{{ $ca->id }}" class="border-b-[1px] border-solid border-[#eee] max-[767px]:border-[1px] max-[767px]:block max-[767px]:mb-[15px]">

                                                    <td data-label="Product" class="gi-cart-pro-name w-[40%] text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left max-[767px]:w-full max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                        <a href="product-left-sidebar.html" class="text-[#777] font-normal text-[14px] flex leading-[1.5] tracking-[0.6px] items-center">
                                                            <img class="gi-cart-pro-img w-[60px] mr-[15px]" src="{{ asset('uploads/product/'.$ca->image)}}" alt="">{{ $ca->name}}
                                                        </a>
                                                    </td>
                                                    <td  data-label="Price" class="gi-cart-pro-price text-[#4b5966] font-medium text-[15px] py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                        <span id="prices" class="amount tracking-[0.02rem]" data-priceUpdate="{{$ca->price}}">{{number_format($ca->price,0,',','.')}} vnđ</span>
                                                    </td>
                                                    <td  >

                                                            <input type="number" class="border rounded-lg text-center p-2 w-[70px] focus:outline-none focus:ring-2 focus:ring-blue-500" data-id="{{$ca->id_variant}}" min="0" data-cart="{{ $ca ->id}}" style="width:70px;" value="{{$ca->quantity}}" id="quantitys">

                                                    </td>
                                                    <td id="totals" data-label="Total" class="gi-cart-pro-subtotal text-[#4b5966] text-[15px] font-medium py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">{{number_format($ca->total,0,',','.')}} VNĐ</td>
                                                    {{-- <input type="text" id="testTotal" value="{{$ca->total}}"> --}}
                                                    <td data-label="Remove" class="gi-cart-pro-remove text-[#4b5966] w-[90px] text-[16px] py-[15px] px-[14px] text-right max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                        <a href="#" class="text-[22px] my-[0] mx-auto"><i class="gicon gi-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="mt-5 mb-5">
                                            <div class="flex justify-between items-center mb-[10px]">
                                                <span class="text-left text-red-500 font-bold text-[20px] leading-[20px] tracking-[0]">Sub-Total</span>
                                                <span class="text-right text-red-500 font-bold text-[20px] leading-[20px]" id="subTotal"></span>
                                            </div>
                                        </div>
                                            @php
                                                $subTotal = $cart->sum(function($ca) {
                                                return $ca->price * $ca->quantity;
                                                });
                                            @endphp
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="w-full">
                                            <div class="gi-cart-update-bottom pt-[30px] flex justify-between">
                                                <a href="http://127.0.0.1:8000/" class="text-[#4b5966] inline-block underline text-[15px] leading-[20px] font-medium tracking-[0.8px]">Continue Shopping</a>
                                               <a href="{{route('checkout',1)}}"> <button type="button" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Check Out</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                {{-- <div class="gi-cart-leftside min-[992px]:w-[33.33%] w-full px-[12px] ">
                    <div class="gi-sidebar-wrap p-[15px] rounded-[5px] border-[1px] border-solid border-[#eee] mb-[0]">
                        <!-- Sidebar Summary Block -->
                        <div class="gi-sidebar-block">
                            <div class="gi-sb-title">
                                <h3 class="gi-sidebar-title text-[20px] font-semibold tracking-[0] mb-[0] leading-[1.2] relative text-[#4b5966] max-[1199px]:text-[18px]">Summary</h3>
                            </div>
                            <div class="gi-sb-block-content mb-[0] border-b-[0] mt-[15px]">
                                <h4 class="gi-ship-title mb-[0] text-[17px] font-bold tracking-[0] leading-[1.2] border-b-[1px] border-solid border-[#eee] text-[#777] pb-[15px] relative flex items-center justify-between">Estimate Shipping</h4>
                                <div class="gi-cart-form pt-[19px]">
                                    <p class="text-[#777] text-[14px] mb-[10px] tracking-[0] leading-[28px] font-light">Enter your destination to get a shipping estimate</p>
                                    <form action="#" method="post">
                                        <span class="gi-cart-wrap">
                                            <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium tracking-[0] leading-[1] inline-block">Country *</label>
                                            <span class="gi-cart-select-inner relative flex w-full h-[50px] border-[1px] border-solid border-[#eee] text-[14px] p-[0] mb-[28px] rounded-[5px]">
                                                <select name="gi_cart_country" id="gi-cart-select-country" class="gi-cart-select">
                                                    <option selected="" disabled="">United States</option>
                                                    <option value="1">Country 1</option>
                                                    <option value="2">Country 2</option>
                                                    <option value="3">Country 3</option>
                                                    <option value="4">Country 4</option>
                                                    <option value="5">Country 5</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="gi-cart-wrap">
                                            <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium tracking-[0] leading-[1] inline-block">State/Province</label>
                                            <span class="gi-cart-select-inner relative flex w-full h-[50px] border-[1px] border-solid border-[#eee] text-[14px] p-[0] mb-[28px] rounded-[5px]">
                                                <select name="gi_cart_state" id="gi-cart-select-state" class="gi-cart-select">
                                                    <option selected="" disabled="">Please Select a region, state</option>
                                                    <option value="1">Region/State 1</option>
                                                    <option value="2">Region/State 2</option>
                                                    <option value="3">Region/State 3</option>
                                                    <option value="4">Region/State 4</option>
                                                    <option value="5">Region/State 5</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="gi-cart-wrap">
                                            <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium tracking-[0] leading-[1] inline-block">Zip/Postal Code</label>
                                            <input type="text" name="postalcode" placeholder="Zip/Postal Code" class="h-[50px] bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px]">
                                        </span>
                                    </form>
                                </div>
                            </div>
                            <div class="gi-sb-block-content mb-[0] border-b-[0] mt-[15px]">
                                <div class="gi-cart-summary-bottom">
                                    <div class="gi-cart-summary">

                                        <div class="flex justify-between items-center mb-[10px]">
                                            <span class="text-left text-[#4b5966] text-[14px] leading-[24px] tracking-[0]">Delivery Charges</span>
                                            <span class="text-right text-[#4b5966] text-[14px] leading-[24px] font-medium">$80.00</span>
                                        </div>
                                        <div class="flex justify-between items-center mb-[10px]">
                                            <span class="text-left text-[#4b5966] text-[14px] leading-[24px] tracking-[0]">Coupan Discount</span>
                                            <span class="text-right text-[#5caf90] text-[14px] leading-[24px] font-medium"><a class="gi-cart-coupan">Apply Coupan</a></span>
                                        </div>
                                        <div class="gi-cart-coupan-content mb-[0] hidden">
                                            <form class="gi-cart-coupan-form flex border-[1px] border-solid border-[#eee] p-[5px] rounded-[5px]" name="gi-cart-coupan-form" method="post" action="#">
                                                <input class="gi-coupan inline-block align-top leading-[35px] h-[40px] text-[#777] text-[14px] w-[80%] border-[0] bg-transparent text-left px-[10px] tracking-[0.5px] outline-[0] rounded-[5px]" type="text" required="" placeholder="Enter Your Coupan Code" name="gi-coupan" value="">
                                                <button type="submit" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]" name="subscribe" value="">Apply</button>
                                            </form>
                                        </div>
                                        <div class="gi-cart-summary-total border-t-[1px] border-solid border-[#eee] pt-[19px] mb-[0] mt-[16px] flex justify-between items-center">
                                            <span class="text-left text-[16px] font-medium text-[#4b5966] leading-[24px] tracking-[0]">Total Amount</span>
                                            <span class="text-right text-[16px] font-medium text-[#4b5966] leading-[24px] tracking-[0]">{{ number_format($subTotal, 0, ',', '.') }} VNĐ</span>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <script type="module">
        let prices = document.querySelectorAll('#prices');
        let quantitys = document.querySelectorAll('#quantitys');
        let totals = document.querySelectorAll('#totals');
        let subTotal = document.querySelector('#subTotal');


        let tongs = 0;
        function forrmatCurrency(number){
            return number.toLocaleString('vi-VN')
        }
        function updateTotalCart(){
            tongs = 0;

            for(let i=0; i< quantitys.length; i++){
            let price = Number(prices[i].dataset.priceupdate);
            let quantity = Number(quantitys[i].value)
            let id = quantitys[i].dataset.cart;
            let total = price *quantity;
            tongs +=total;


            let checkVariant = quantitys[i].dataset.id;


            const formattedNumber = forrmatCurrency(total);
            totals[i].innerHTML = `${formattedNumber} VNĐ`;

            $.ajax({
                    url:'{{route("checkCart")}}',
                    method:'GET',
                    data:{
                        checkVariant
                    },

                    success:function(data){
                        console.log(data);
                        if(data){
                            let quantitys = data.quantity;
                            if(quantity > quantitys){
                                alert('Số lượng trong kho không đủ');
                            }else{
                                $.ajax({
                                    url:'{{route("quantityCart")}}',
                                    method:'GET',
                                    data:{
                                        id,
                                        total,
                                        quantity
                                    },

                                    success:function(){
                                        console.log('Thành Công');
                                    }
                                })
                            }
                        }
                    }
                })


        }
        subTotal.innerHTML = forrmatCurrency(tongs) + "VNĐ";
    }

    for(let i = 0; i< quantitys.length; i++){
        quantitys[i].addEventListener('change',updateTotalCart);
    }

    updateTotalCart();

    </script>
    <!-- Cart section End -->
    <script>
        // xóa sản phẩm
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.gi-trash-o').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();

                    if (confirm('Are you sure you want to remove this product from the cart?')) {
                        const cartItemId = this.closest('tr').getAttribute('data-id');

                        fetch(`/cart/${cartItemId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Content-Type': 'application/json',
                            },
                        }).then(response => {
                            if (response.ok) {
                                location.reload();
                            } else {
                                alert('Không thể xóa sản phẩm');
                            }
                        });
                    }
                });
            });
        });
        // xóa sản phẩm



        // lấy số lượng tăng giảm

    </script>

@endsection
