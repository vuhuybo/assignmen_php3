@extends('layout.main')
@section('main')


<!-- Checkout section -->
<section class="gi-checkout-section py-[40px] text-[14px] max-[767px]:py-[30px]">
    <form action="{{route ('addInvoice')}}" method="POST" id="submitform1" >
       @csrf
        <input type="hidden" name="total" value="{{$total}}" >
        <input type="hidden" name="quantity" value="{{$quantity}}"  >
        <input type="hidden" name="id_user" value="1" >
        <input type="hidden" name="id_customer" id="id_customer" >
        <input type="hidden" name="payment_method" id="payment_method">

    </form>
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
        <div class="flex flex-wrap w-full">
            <!-- Sidebar Area Start -->
            <div class="gi-checkout-rightside px-[12px] min-[992px]:w-[33.33%] w-full">


                   @csrf
                    <div class="gi-sidebar-wrap border-[1px] border-solid border-[#eee] mb-[30px] p-[15px] rounded-[5px]">
                        <!-- Sidebar Summary Block -->
                        <div class="gi-sidebar-block">
                            <div class="gi-sb-title">
                                <h3 class="gi-sidebar-title text-[20px] max-[1199px]:text-[18px] font-semibold tracking-[0] mb-[0] relative text-[#4b5966] leading-[1.2]">Summary</h3>
                            </div>
                            <div class="gi-sb-block-content mt-[15px]">

                                <div class="gi-checkout-summary">
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#777] text-[14px] leading-[24px] tracking-[0]">Sub-Total</span>
                                        <span class="text-right text-[#4b5966] text-[15px] leading-[24px] font-medium">{{number_format($total)}} VNĐ</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#777] text-[14px] leading-[24px] tracking-[0]">Total Quantity</span>
                                        <span class="text-right text-[#4b5966] text-[15px] leading-[24px] font-medium">{{$quantity}}</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#777] text-[14px] leading-[24px] tracking-[0]">Coupan Discount</span>
                                        <span class="text-right text-[#4b5966] text-[15px] leading-[24px] font-medium"><a class="gi-checkout-coupan text-[#5caf90] text-[14px] font-medium">Apply Coupan</a></span>
                                    </div>
                                    <div class="gi-checkout-coupan-content hidden flex justify-between items-center mb-[10px]">
                                        <form class="gi-checkout-coupan-form flex border-[1px] border-solid border-[#eee] p-[5px] rounded-[5px]" name="gi-checkout-coupan-form" method="post" action="{{ route('apply-promotion') }}">
                                            @csrf
                                            <input class="gi-coupan inline-block align-top leading-[35px] h-[35px] w-full text-[#777] text-[14px] border-[0] bg-transparent text-left pl-[10px] pr-[10px] tracking-[0.5px] rounded-[5px] outline-[0]" type="text" required="" placeholder="Enter Your Coupan Code" name="code" value="">
                                            <button type="submit" class="gi-coupan-btn gi-btn-2 text-[16px] text-center px-[15px] transition-all duration-[0.3s] ease-in-out font-medium bg-[#5caf90] text-[#fff] rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" name="subscribe" value="">Apply</button>
                                        </form>
                                        <div id="promotion-message"></div>
                                        <div id="discounted-price">
                                    </div>
                                    <div class="gi-checkout-summary-total border-t-[1px] border-solid border-[#eee] pt-[19px] mb-[0] mt-[16px] flex justify-between items-center">
                                        <span class="text-left text-[16px] font-semibold text-[#4b5966] tracking-[0] font-manrope">Total Amount</span>
                                        <span class="text-right text-[16px] font-semibold text-[#4b5966] font-manrope">{{number_format($total)}} VNĐ</span>
                                    </div>
                                </div>
                                <div class="gi-checkout-pro mt-3">
                                    @foreach ($cart as $ca)
                                    <div class="w-full mb-[15px]">
                                        <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                            <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image relative block overflow-hidden pointer-events-none">
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('uploads/product/'.$ca->image)}}" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('uploads/product/'.$ca->image)}}" alt="Product">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">{{$ca->name}}</a>
                                                </h5>
                                                <div class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                    <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                </div>
                                                <span class="gi-price">
                                                    <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">Số lượng: {{$ca->quantity}} sp</span>/
                                                    <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">Giá tiền:{{number_format($ca->price,0,',','.')}} VNĐ</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <span class="gi-check-order-btn flex flex-end p-[0]">

                        <select name="payment_method" onchange="Payment(this)"  class="form-select mb-3">
                            <option value="0" disabled selected>Phương thức thanh toán</option>
                            <option value="1">VN Pay</option>
                            <option value="2">MOMO</option>
                        </select>
                        </span>




                        <!-- Sidebar Summary Block -->
                    </div>

                    <button class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" id="submitform">Add Customer</button>




            </div>
            <div class="gi-checkout-leftside px-[12px] min-[992px]:w-[66.66%] w-full max-[991px]:mt-[30px]">
                <!-- checkout content Start -->
                <div class="gi-checkout-content">
                    <div class="gi-checkout-inner">

                        <div class="gi-checkout-wrap pb-[3px] p-[30px] border-[1px] border-solid border-[#eee] bg-[#fff] rounded-[5px] mb-[40px]">
                            <div class="gi-checkout-block gi-check-bill">
                                <h3 class="gi-checkout-title mb-[26px] leading-[1.2] text-[20px] font-semibold tracking-[0] relative block text-[#4b5966] font-Montserrat max-[575px]:text-[18px]">Billing Details</h3>
                                <div class="gi-bl-block-content">
                                    <div class="gi-check-bill-form mb-[2px]">

                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Name*</label>
                                                <input type="text" id="name" placeholder="Name"  class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]" required>
                                            </span>
                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Email*</label>
                                                <input type="text"  id="email" placeholder="Enter your last email" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]" required>
                                            </span>
                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Phone*</label>
                                                <input type="text"  id="phone"  placeholder="Address Line 1" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">
                                            </span>
                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Address*</label>
                                                <input type="text"  id="address"  placeholder="Address Line 1" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">
                                            </span>
                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">District*</label>
                                                <input type="text"  id="district" placeholder="District" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">

                                            </span>
                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Post Code</label>
                                                <input type="text"  id="postal_code" placeholder="Post Code" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">
                                            </span>
                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Conscious *</label>
                                                <input type="text"  id="conscious" placeholder="Conscious" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">

                                            </span>
                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Country</label>
                                                <input type="text"  id="country" placeholder="Country" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">

                                            </span>

                                            <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                <button class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" type="submit" id="addCustomer">Add Customer</button>


                                            </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--cart content End -->
            </div>
        </div>
    </div>
</form>
</section>
<!-- Checkout section End -->

<script>
    function Payment(x){
        document.getElementById('payment_method').value = x.value;
    }
    let btn = document.getElementById('submitform');
    btn.addEventListener('click',()=>{
      document.getElementById('submitform1').submit();
    })
</script>


<script type="module">
    $('#addCustomer').click(function(){
        let name = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let address = $('#address').val();
        let district = $('#district').val();
        let postal_code = $('#postal_code').val();
        let conscious = $('#conscious').val();
        let country = $('#country').val();
        let id = 1;

        $.ajax({
        url:'{{route('customer')}}',
        method:'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
            name,
            email,
            phone,
            address,
            district,
            postal_code,
            conscious,
            country,
            id
        },
        success:function(){
            alert('Thêm thông tin khách hàng thành công');
            // window.location.reload();
        }
    })

    })
</script>

<script type="module">

    $('document').ready(function(){
        $.ajax({
            url:'{{route('getcustomer')}}',
            method:'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                 id:1
            },
        success:function(data){
            let name = $('#name').val(data.name);
            let email = $('#email').val(data.email);
            let phone = $('#phone').val(data.phone);
            let address = $('#address').val(data.address);
            let district = $('#district').val(data.district);
            let postal_code = $('#postal_code').val(data.postal_code);
            let conscious = $('#conscious').val(data.conscious);
            let country = $('#country').val(data.country);
            $('#id_customer').val(data.id);

            if(data){
                $('#addCustomer').hide();
            }
        }
        })
    })

</script>


<script type="module">
    document.getElementById('apply-promotion-form').addEventListener('submit', function(event) {
        event.preventDefault();

        let form = event.target;
        let formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('promotion-message').innerText = data.message;
                document.getElementById('discounted-price').innerText = 'Giá sau khi giảm: ' + data.discounted_price + ' VND';
            } else {
                document.getElementById('promotion-message').innerText = data.message;
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>






@endsection
