<!--
Item Name: Grabit - Multipurpose eCommerce Tailwind CSS Template.
Author: Maraviya Infotech
Version: 1.0.0
Copyright 2024
-->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/grabit-tailwind/grabit-tailwind/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:03:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Grabit - Multipurpose eCommerce Tailwind CSS Template.</title>
    <meta name="keywords"  content="tailwindcss, ecommerce, farming, food market, grocery market, grocery shop, grocery store, grocery supper market, multi vendor, organic food, supermarket, supermarket grocery">
    <meta name="description" content="Multipurpose eCommerce Tailwind CSS Template">
    <meta name="author" content="Maraviya Infotech">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- site Favicon -->
{{-- <link rel="icon" href="{{ asset('assets1/img/favicon/favicon.png') }}" sizes="32x32">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<!-- css Icon Font -->
<link rel="stylesheet" href="{{ asset('assets1/css/vendor/gicons.css') }}">

<!-- css Tất cả các tệp plugin -->
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/slick.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/nouislider.css') }}">

<!-- Tailwindcss -->
<script src="{{ asset('assets1/js/plugins/tailwindcss3.4.1') }}"></script>

<!-- Kiểu chính -->
<link rel="stylesheet" id="main_style" href="{{ asset('assets1/css/demo-1.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/responsive.css') }}">

</head>

<body class="w-full h-full relative font-Poppins font-normal overflow-x-hidden">

    <!-- Loader -->
    <div id="gi-overlay" class=" w-full h-full fixed top-0 right-0 left-0 bottom-0 bg-[#fff] z-[99] flex items-center justify-center overflow-hidden">
        <div class="loader"></div>
    </div>

    <!-- Header start  -->
    <header class="gi-header bg-[#fff] z-[14] max-[991px]:z-[16] relative">
        <!-- Header Top Start -->
        <div class="header-top py-[10px] text-[#777] bg-[#f8f8fb]">
            <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="w-full flex flex-wrap px-[12px]">
                    <!-- Header Top social Start -->
                    <div class="grow-[1] shrink-[0] basis-[0%] min-[992px]:block max-[767px]:hidden">
                        <div class="header-top-social">
                            <ul class="mb-[0] p-[0] flex">
                                <li class="list-inline-item transition-all duration-[0.3s] ease-in-out flex text-[13px] mr-[15px]">
                                    <a href="javascript:void(0)" class="mx-[5px] text-center flex items-center justify-center text-[15px]">
                                        <i class="fi fi-rr-phone-call transition-all duration-[0.3s] ease-in-out text-[#777]"></i>
                                    </a>
                                    +91 987 654 3210
                                </li>
                                <li class="list-inline-item transition-all duration-[0.3s] ease-in-out flex text-[13px]">
                                    <a href="javascript:void(0)" class="mx-[5px] text-center flex items-center justify-center text-[15px]">
                                        <i class="fi fi-brands-whatsapp transition-all duration-[0.3s] ease-in-out text-[#777]"></i>
                                    </a>
                                    +91 987 654 3210
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="grow-[1] shrink-[0] basis-[0%] text-center max-[1199px]:hidden">
                        <div class="header-top-message text-[13px]">
                            World's Fastest Online Shopping Destination
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="grow-[1] shrink-[0] basis-[0%] hidden min-[992px]:block">
                        <div class="header-top-right-inner flex justify-end">
                            <a class="gi-help pl-[20px] text-[13px] text-[#777] tracking-[0.7px] font-normal hover:text-[#5caf90]" href="faq.html">Help?</a>
                            <a class="gi-help pl-[20px] text-[13px] text-[#777] tracking-[0.7px] font-normal hover:text-[#5caf90]" href="track-order.html">Track Order?</a>
                            <!-- Language Start -->
                            <div class="header-top-lan-curr header-top-lan dropdown pl-[20px] flex flex-wrap relative">
                                <button type="button" class="dropdown-toggle text-[13px] flex items-center p-[0] transition-all duration-[0.3s] ease delay-0 text-[#777] border-[0] tracking-[0.7px]">English
                                    <i class="fi-rr-angle-small-down text-[14px] ml-[5px] text-[#777] transition-all duration-[0.3s] ease delay-0 flex"></i>
                                </button>
                                <ul class="hidden dropdown-menu absolute top-[32px] left-[auto] right-[0] min-w-[130px] truncate px-[10px] bg-[#fff] z-[1] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                    <li class="active border-b-[1px] border-solid border-[#eee] leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">English</a>
                                    </li>
                                    <li class="leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">Italiano</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Language End -->
                            <!-- Currency Start -->
                            <div class="header-top-lan-curr header-top-curr dropdown pl-[20px] flex flex-wrap relative">
                                <button type="button" class="dropdown-toggle text-[13px] flex items-center p-[0] transition-all duration-[0.3s] ease delay-0 text-[#777] border-[0] tracking-[0.7px]">Dollar
                                    <i class="fi-rr-angle-small-down text-[14px] ml-[5px] text-[#777] transition-all duration-[0.3s] ease delay-0 flex"></i>
                                </button>
                                <ul class="hidden dropdown-menu absolute top-[32px] left-[auto] right-[0] min-w-[130px] truncate px-[10px] bg-[#fff] z-[1] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                    <li class="active border-b-[1px] border-solid border-[#eee] leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">USD $</a>
                                    </li>
                                    <li class="leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">EUR €</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Currency End -->
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="grow-[1] shrink-[0] basis-[0%] min-[992px]:hidden">
                        <div class="gi-header-bottons flex justify-end">
                            <div class="right-icons flex flex-row">
                                <!-- Header User Start -->
                                <a href="login.html" class="gi-header-btn gi-header-user mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-user text-[24px] leading-[17px]"></i>
                                    </div>
                                </a>
                                <!-- Header User End -->
                                <!-- Header Wishlist Start -->
                                <a href="wishlist.html" class="gi-header-btn gi-wish-toggle mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                    </div>
                                    <span class="gi-header-count gi-wishlist-count w-[15px] h-[15px] text-[#fff] flex items-center justify-center rounded-[50%] text-[11px] absolute top-[-2px] right-[-6px] opacity-[0.8]">3</span>
                                </a>
                                <!-- Header Wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="javascript:void(0)" class="gi-header-btn gi-cart-toggle mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-shopping-bag text-[24px] leading-[17px]"></i>
                                        <span class="main-label-note-new"></span>
                                    </div>
                                    <span class="gi-header-count gi-cart-count  w-[15px] h-[15px] text-[#fff] flex items-center justify-center rounded-[50%] text-[11px] absolute top-[-2px] right-[-6px] opacity-[0.8]">3</span>
                                </a>
                                <!-- Header Cart End -->
                                <!-- Header menu Start -->
                                <a href="javascript:void(0)"
                                    class="gi-header-btn gi-site-menu-icon relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                    <i class="fi-rr-menu-burger text-[24px] leading-[17px]"></i>
                                </a>
                                <!-- Header menu End -->
                            </div>
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Header Top  End -->

        <!-- Header Bottom  Start -->
        <div class="gi-header-bottom py-[30px] max-[991px]:py-[15px] max-[991px]:border-b-[1px] border-solid border-[#eee]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="w-full flex flex-wrap px-[12px]">
                    <div class="gi-flex flex flex-row justify-between w-full max-[575px]:flex-col">
                        <!-- Header Logo Start -->
                        <div class="self-center gi-header-logo max-[575px]:mb-[15px]">
                            <div class="header-logo text-left">
                                <a href="http://127.0.0.1:8000/"><img src="{{ asset('assets1/img/logo/logo.png') }}" alt="Site Logo" class="w-[144px] max-[1199px]:w-[130px] max-[991px]:w-[120px] max-[767px]:w-[100px] "></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->
                        <!-- Header Search Start -->
                        <div class="self-center gi-header-search my-[0] mx-[auto] max-[991px]:m-0">
                            <div class="header-search w-full min-w-[700px] px-[30px] relative max-[1399px]:min-w-[500px] max-[1199px]:min-w-[400px] max-[991px]:p-0 max-[767px]:min-w-[350px] max-[480px]:min-w-[300px] max-[320px]:min-w-full">
                                <form class="gi-search-group-form relative flex border-[1px] border-solid border-[#eee] items-center rounded-[5px]" action="#">
                                    <input class="form-control gi-search-bar block w-full min-h-[50px] h-[50px] max-[991px]:h-[40px] max-[991px]:min-h-[40px] px-[15px] text-[13px] font-normal leading-[1] text-[#777] bg-transparent outline-[0] border-[0] tracking-[0.6px]" placeholder="Search Products..." type="text">
                                    <button type="submit" class="search_submit relative flex items-center justify-center w-[48px] h-[40px] basis-[48px]">
                                        <i class="fi-rr-search text-[#4b5966] h-[18px] w-[18px] transition-all duration-[0.3s] ease-in-out"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- Header Search End -->
                        <!-- Header Button Start -->
                        <div class="gi-header-action self-center max-[991px]:hidden">
                            <div class="gi-header-bottons flex justify-end">
                                <!-- Header User Start -->
                                <div class="gi-acc-drop relative">
                                    <a href="javascript:void(0)" class="gi-header-btn gi-header-user dropdown-toggle gi-user-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap" title="Account">
                                        <div class="header-icon relative flex">
                                            <i class="fi-rr-user text-[24px] leading-[17px]"></i>
                                        </div>
                                        <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                            <span class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Account</span>
                                            <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">Login</span>
                                        </div>
                                    </a>
                                    <ul class="gi-dropdown-menu min-w-[150px] py-[5px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute z-[16] text-left bg-[#fff] block opacity-0 invisible left-[0] right-[auto] border-[1px] border-solid border-[#eee] rounded-[5px]">

                                        {{-- <li class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]">
                                            <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
                                        </li>

                                        <li class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]">
                                            <a class="nav-link" href="">Đăng Ký</a>
                                        </li> --}}

                                        <!-- Authentication Links -->
                                            @guest
                                                @if (Route::has('login'))
                                                    <li class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]">
                                                        <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
                                                    </li>
                                                @endif
                                                @if (Route::has('register'))
                                                    <li class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]">
                                                        <a class="nav-link" href="{{ route('register') }}">Đăng Ký</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            Đăng Xuất
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>

                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="wishlist.html" class="gi-header-btn gi-wish-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap" title="Wishlist">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                        <span class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Wishlist</span>
                                        <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]"><b class="gi-wishlist-count">3</b>-items</span>
                                    </div>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="javascript:void(0)" class="gi-header-btn gi-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap" title="Cart">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-shopping-bag text-[24px] leading-[17px]"></i>
                                        <span class="main-label-note-new transition-all duration-[0.3s] ease-in-out h-[10px] w-[10px] m-auto bg-[#ec716d] rounded-[50%] cursor-default hidden absolute bottom-[15px] left-[0] right-[0] z-[3]"></span>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                        <span class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Cart</span>
                                        <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">
                                            <b class="gi-cart-count"></b>-items
                                        </span>
                                    </div>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Button End -->

        <!-- Header menu -->
        <div class="gi-header-cat transition-all duration-[0.3s] ease-in-out bg-[#fff] border-t-[1px] border-b-[1px] border-solid border-[#eee] hidden min-[992px]:block">
            <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
                <div class="gi-nav-bar flex flex-row justify-between relative w-full px-[12px]">
                    <!-- Category Toggle -->
                    <div class="gi-category-icon-block py-[5px] static">
                        <div class="gi-category-menu relative">
                            <div class="gi-category-toggle w-[200px] min-h-[50px] px-[15px] flex items-center bg-[#5caf90] rounded-[5px] cursor-pointer max-[1199px]:w-auto max-[991px]:border-[0]">
                                <i class="fi fi-rr-apps text-[18px] text-[#fff] leading-[0]"></i>
                                <span class="text ml-[10px] text-[15px] text-[#fff] font-medium max-[1199px]:hidden">All Categories</span>
                                <i class="fi-rr-angle-small-down text-[18px] uppercase text-[#fff] text-center absolute right-[15px] leading-[0] max-[1199px]:hidden" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="gi-cat-dropdown transition-all duration-[0.3s] ease-in-out w-[290px] mt-[15px] p-[15px] absolute bg-[#fff] opacity-[0] invisible left-[0] z-[-15] rounded-[5px] border-[1px] border-solid border-[#eee]">
                            <div class="gi-cat-block">
                                <div class="gi-cat-tab flex">
                                    <ul class="nav-tabs min-w-[250px] bg-[#f8f8fb] p-[15px] rounded-[5px] flex-col justify-center mr-[16px]" id="myTab">
                                        @foreach($category as $cate)
                                        <li class="active transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] rounded-[5px] flex items-center mb-[10px]">
                                            <a href="{{ route('showByCategory',['name'=>$cate->name])}}" >
                                                {{$cate->name}}</i>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Menu Start -->
                    <div id="gi-main-menu-desk" class="w-full flex items-center min-[992px]:block hidden">
                        <div class="nav-desk">
                            <div class="w-full flex flex-wrap px-[12px] min-[1400px]:relative">
                                <div class="basis-auto w-full self-center">
                                    <div class="gi-main-menu flex">
                                        <ul class="w-full flex justify-center flex-wrap pl-[0]">
                                            <li class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                <a href="http://127.0.0.1:8000/" class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Home</a>
                                            </li>

                                            <li class="dropdown drop-list static ml-[10px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px] relative inline-block">
                                                <a href="javascript:void(0)" class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Categories<i class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[-27px] text-[18px] rotate-[90deg] flex"></i></a>
                                                <ul class="mega-menu block transition-all duration-[0.3s] ease-in-out w-auto max-[1399px]:mx-[6px] mt-0 absolute bg-[#fff] pl-[10px] opacity-0 invisible left-0 top-full z-[15] rounded-[5px] border-[1px] border-solid border-[#eee] truncate">
                                                    <li class="flex">
                                                        <ul class="mega-block py-[10px] block">
                                                            @foreach ($category as $cate)

                                                                <li><a href="{{ route('showByCategory',['name'=>$cate->name])}}" class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">{{$cate->name}}</a></li>

                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                <a href="{{route('shopproduct')}}" class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Products</a>

                                            </li>

                                            <li class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                <a href="javascript:void(0)" class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Blog</a>
                                            </li>

                                            <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="shop-banner-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                    <i class="fi-rr-badge-percent transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Offers
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main Menu End -->

                    <div class="gi-location-block py-[5px]">
                        <div class="gi-location-menu transition-all duration-[0.3s] ease-in-out relative">
                            <div class="gi-location-toggle w-[200px] min-h-[50px] px-[15px] flex items-center bg-[#5caf90] rounded-[5px] cursor-pointer">
                                <i class="fi fi-rr-marker location text-[#fff] text-[18px] leading-[0]"></i>
                                <span class="gi-location-title gi-location w-[calc(100%-30px)] px-[10px] text-[15px] text-[#fff] font-medium tracking-[0.2px] whitespace-nowrap truncate">New York</span>
                                <i class="fi-rr-angle-small-down gi-angle text-[18px] uppercase text-[#fff] text-center absolute right-[15px] leading-[0]" aria-hidden="true"></i>
                            </div>
                            <div class="gi-location-content transition-all duration-[0.3s] ease-in-out w-[200px] py-[15px] px-[13px] mt-[15px] block absolute invisible left-auto right-0 top-[100%] rounded-[5px] z-[14] border-[1px] border-solid border-[#eee] bg-[#fff] overflow-auto">
                                <div class="gi-location-dropdown">
                                    <div class="w-full flex flex-wrap gi-location-wrapper">
                                        <ul class="loc-grid w-full">
                                            <li class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] rounded-[5px] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span class="gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">current Location</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header menu End -->

        <!-- Mobile Menu sidebar Start -->
        <!-- Mobile Menu sidebar End -->
    </header>
    <!-- Header End  -->

    <!-- Cart sidebar Start -->
    <div class="gi-side-cart-overlay w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[17] hidden"></div>
    <div id="gi-side-cart" class="gi-side-cart w-[350px] max-[480px]:w-[300px] h-full pt-[15px] px-[20px] text-[14px] font-normal fixed z-[17] top-[0] right-0 left-auto block transition-all duration-[0.5s] ease delay-0 bg-[#fff] overflow-auto">
        <div class="gi-cart-inner relative z-[9] flex flex-col h-full justify-between">
            <div class="gi-cart-top">
                <div class="gi-cart-title w-full flex flex-wrap justify-between">
                    <span class="cart_title text-[15px] text-[#4b5966] font-Poppins font-semibold mb-[20px]">My Cart</span>
                    <a href="javascript:void(0)" class="gi-cart-close relative border-[0] text-[30px] leading-[20px] text-[#4b5966]">
                        <i class="fi-rr-cross-small text-[20px] leading-[0]"></i>
                    </a>
                </div>
                <ul class="gi-cart-pro-items">
                    @foreach ($cart as $ca)
                    <li data-id="{{ $ca->id }}" class="mb-[15px] p-[15px] flex overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <a href="#" class="gi-pro-img flex grow-[1] basis-[20%] items-center"><img src="{{ asset('uploads/product/'.$ca->image)}}" class="w-full" alt="product"></a>
                        <div class="gi-pro-content relative grow-[1] basis-[70%] pl-[15px] overflow-hidden">
                            <a href="product-left-sidebar.html" class="cart-pro-title w-full pr-[30px] text-[#777] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">{{$ca->name}}</a>
                            <span class="cart-price text-[14px] block mt-[5px]"><span class="text-[#777] font-semibold text-[16px]">{{number_format($ca->price,0,',','.')}} vnđ
                            <div class="qty-plus-minus border-[1px] border-solid border-[#eee] h-[35px] overflow-hidden relative w-[85px] flex items-center justify-between py-[7px] mt-[7px]">

                                <input class="qty-input"  type="text" id="quantity" name="gi-qtybtn" value="{{$ca->quantity}}" >

                            </div>
                            <a href="" class="remove leading-[15px] absolute top-[0] right-[0] pl-[10px] text-[#ff0000] text-[22px]"><i class="gicon gi-trash-o"></i></a>
                        </div>
                    </li>

                    @endforeach

                </ul>
            </div>
            <div class="gi-cart-bottom"> {{-- tổng--}}
                <div class="cart_btn flex justify-between mb-[20px]">
                    <a href="{{ route ('viewcart')}}" class="gi-btn-1 w-[48%] h-[40px] block uppercase font-semibold text-[14px] py-[8px] px-[15px] leading-[22px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]">View Cart</a>
                    <a href="{{route('checkout',1)}}" class="gi-btn-2 w-[48%] h-[40px] block uppercase font-semibold text-[14px] py-[8px] px-[15px] leading-[22px] bg-[#5caf90] text-[#fff] text-center rounded-[5px] transition-all dummy-[0.3s] ease-in-out hover:bg-[#4b5966]">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart sidebar End -->

    @yield('main')

    <!-- Footer Start -->
    <footer class="gi-footer bg-[#fff] border-t-[1px] border-solid border-[#eee] mt-[40px]">
        <div class="footer-container">
            <div class="footer-top py-[80px] max-[767px]:py-[60px]">
                <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                    <div class="w-full flex flex-wrap">
                        <div class="min-[992px]:w-[25%] px-[12px] w-full gi-footer-cat wow fadeInUp">
                            <div class="gi-footer-widget gi-footer-company flex flex-col">
                                <img src="{{ asset('assets1/img/logo/logo.png') }}" class="gi-footer-logo max-w-[144px] max-[767px]:max-w-[130px]  mb-[30px]" alt="footer logo">
                                <p class="gi-footer-detail max-w-[400px] mb-[30px] p-[0] text-[14px] leading-[27px] font-normal text-[#777] inline-block relative max-[1199px]:text-[14px]">Grabit is the biggest market of grocery products. Get your
                                    daily needs from our store.</p>
                                <div class="gi-app-store mb-[30px] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row max-[320px]:flex-col">
                                    <a href="#" class="app-img"><img src="{{ asset('assets1/img/app/android.png') }}" class="adroid max-w-[140px] max-[1399px]:max-w-[120px]  mb-[15px] rounded-[5px] mr-[15px]" alt="apple"></a>
                                    <a href="#" class="app-img"><img src="{{ asset('assets1/img/app/apple.png') }}" class="apple max-w-[140px] max-[1399px]:max-w-[120px] mb-[15px] rounded-[5px]" alt="apple"></a>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-info wow fadeInUp" data-wow-delay="0.2s">
                            <div class="gi-footer-widget">
                                <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Category</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Dairy & Milk</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-banner-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Snack & Spice</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-full-width-col-5.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Fast Food</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-list-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Juice & Drinks</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-list-full-col-2.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Bakery</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="shop-banner-right-sidebar-col-4.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Seafood</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-account wow fadeInUp" data-wow-delay="0.3s">
                            <div class="gi-footer-widget">
                                <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Company</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="about-us.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">About us</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="track-order.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Delivery</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="privacy-policy.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Legal Notice</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="terms-condition.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Terms & conditions</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="checkout.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Secure payment</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="contact-us.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-service wow fadeInUp" data-wow-delay="0.4s">
                            <div class="gi-footer-widget">
                                <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Account</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="register.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Sign In</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="cart.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">View Cart</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="privacy-policy.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Return Policy</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Become a Vendor</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Affiliate Program</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="checkout.html" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Payments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[25%] gi-footer-toggle px-[12px] w-full gi-footer-cont-social mb-[-20px] wow fadeInUp" data-wow-delay="0.5s">
                            <div class="gi-footer-contact mb-[30px] max-[991px]:mb-[0]">
                                <div class="gi-footer-widget">
                                    <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Contact</h4>
                                    <div class="gi-footer-links gi-footer-dropdown">
                                        <ul class="align-itegi-center">
                                            <li class="gi-footer-link gi-foo-location m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i class="fi fi-rr-marker location leading-[0] text-[18px] mt-[5px] h-[25px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <p class="m-[0] text-[14px] font-normal text-[#777]">2548 Broaddus Maple Court, Madisonville KY 4783, USA.</p>
                                            </li>
                                            <li class="gi-footer-link gi-foo-call m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i class="fi fi-brands-whatsapp leading-[0] text-[18px] h-[20px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <a href="tel:+009876543210" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">+00 9876543210</a>
                                            </li>
                                            <li class="gi-footer-link gi-foo-mail m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i class="fi fi-rr-envelope leading-[0] text-[18px] h-[20px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <a href="mailto:example@email.com" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">example@email.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-footer-social">
                                <div class="gi-footer-widget">
                                    <div class="gi-footer-links gi-footer-dropdown">
                                        <ul class="align-itegi-center flex flex-wrap">
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-facebook text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-twitter text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-linkedin text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-instagram text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-[10px] max-[991px]:py-[15px] border-t-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
                <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                    <div class="w-full flex flex-wrap">
                        <div class="gi-bottom-info flex flex-row items-center justify-between w-full px-[12px] max-[991px]:flex-col">
                            <!-- Footer Copyright Start -->
                            <div class="footer-copy max-[991px]:mb-[15px]">
                                <div class="footer-bottom-copy">
                                    <div class="gi-copy text-[#777] text-[13px] tracking-[1px] text-center font-light">Copyright ©
                                        <a class="site-name text-[#5caf90]" href="index.html">Grabit</a>
                                        all rights reserved. Powered by Grabit.</div>
                                </div>
                            </div>
                            <!-- Footer Copyright End -->
                            <!-- Footer payment -->
                            <div class="footer-bottom-right">
                                <div class="footer-bottom-payment flex justify-content-center">
                                    <div class="payment-link">
                                        <img src="{{ asset('assets1/img/hero-bg/payment.png') }}" alt="payment">
                                    </div>
                                </div>
                            </div>
                            <!-- Footer payment -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Quickview Modal -->
    <div class="gi-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[30] bg-[#000000b3]"></div>
    <div class="modal gi-modal max-[575px]:w-full fixed top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto">
        <div class="modal-dialog modal-dialog-centered h-full my-[0%] mx-auto max-w-[900px] w-[900px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out">
            <div class="modal-content quickview-modal p-[30px] relative bg-[#fff] rounded-[5px] max-[360px]:p-[15px]">
                <button type="button" class="gi-close-modal qty_close absolute top-[10px] right-[10px] leading-[18px] max-[420px]:top-[5px] max-[420px]:right-[5px]"></button>
                <div class="modal-body mx-[-12px] max-[767px]:mx-[0]">
                    <div class="w-full flex flex-wrap w-full">
                        <div class="min-[768px]:w-[41.66%] px-[12px] max-[767px]:px-[0] w-full">
                            <div class="single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden">
                                <div class="single-product-scroll h-full">
                                    <div class="single-slide h-full flex items-center zoom-image-hover">
                                        <img class="img-responsive h-full w-full" src="{{ asset('assets1/img/product-images/10_1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[768px]:w-[58.33%] px-[12px] max-[767px]:px-[0] w-full max-[767px]:mt-[30px]">
                            <div class="quickview-pro-content">
                                <h5 class="gi-quick-title">
                                    <a href="product-left-sidebar.html" class="mb-[15px] block text-[#4b5966] text-[22px] leading-[1.5] font-medium max-[991px]:text-[20px]">Mix nuts premium quality organic dried fruit 250g pack</a>
                                </h5>
                                <div class="gi-quickview-rating flex mb-[15px]">
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star text-[14px] text-[#777] mr-[5px]"></i>
                                </div>
                                <div class="gi-quickview-desc mb-[10px] text-[15px] leading-[24px] text-[#777] font-light">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1900s,</div>
                                <div class="gi-quickview-price pt-[5px] pb-[10px] flex items-center justify-left">
                                    <span class="new-price text-[#4b5966] font-bold text-[22px]">$50.00</span>
                                    <span class="old-price text-[18px] ml-[10px] line-through text-[#777]">$62.00</span>
                                </div>
                                <div class="gi-pro-variation mt-[5px]">
                                    <div class="gi-pro-variation-inner flex flex-col mb-[15px] gi-pro-variation-size gi-pro-size">
                                        <div class="gi-pro-variation-content">
                                            <ul class="gi-opt-size">
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90] active">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Small">250g</a>
                                                </li>
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Medium">500g</a>
                                                </li>
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Large">1kg</a>
                                                </li>
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Extra Large">2kg</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-quickview-qty mt-[15px] inline-flex">
                                    <div class="qty-plus-minus w-[100px] h-[43px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between rounded-[3px]">
                                        <input class="qty-input w-[40px] h-[50px] text-[#777] text-[14px] text-center outline-[0]" type="text" name="gi_qtybtn" value="1">
                                    </div>
                                    <div class="gi-quickview-cart">
                                        <button type="button" class="gi-btn-1 ml-[15px] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]"><i class="fi-rr-shopping-basket text-[14px] leading-[0] mr-[5px]"></i> Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quickview Modal end -->


    <!-- Back to top  -->
    <a class="gi-back-to-top inline-block bg-[#4b5966] w-[40px] h-[40px] text-center rounded-[4px] fixed bottom-[30px] right-[30px] opacity-[0] invisible z-[16] border-[1px] border-solid border-[#fff] hover:cursor-pointer hover:bg-[#000] hover:opacity-[1] max-[767px]:bottom-[15px] max-[767px]:right-[15px]"></a>

    <!-- Feature tools -->
    <div class="gi-tools-sidebar-overlay hidden w-full h-screen fixed top-0 left-0 bg-[#00000080] z-[16]"></div>
    <div class="gi-tools-sidebar bg-[#fff] w-[300px] h-screen fixed right-0 top-0 transition-all duration-[0.3s] ease z-[17]">
        <a href="javascript:void(0)" class="gi-tools-sidebar-toggle in-out absolute top-[45%] right-[302px] h-[40px] w-[40px] bg-[#1d253199] transition-all duration-[0.3s] ease-in flex items-center justify-center text-[25px] z-[-1] rounded-[5px]">
            <i class="fi fi-rr-settings text-[#fff]"></i>
        </a>
        <div class="gi-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#17181c]">
            <h6 class="m-0 text-[17px] font-bold text-[#4b5966] leading-[1.2]">Tools</h6>
            <a href="javascript:void(0)" class="close-tools relative border-[0] text-[30px] leading-[20px] text-[#4b5966]">
                <i class="fi-rr-cross-small text-[20px] leading-[0]"></i>
            </a>
        </div>
        <div class="gi-tools-detail overflow-auto px-[15px] pb-[15px] h-[calc(100vh-72px)]">
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Select Color</h3>
                <ul class="gi-color">
                    <li class="color-primary inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative active-variant"></li>
                    <li class="color-1 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-2 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-3 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-4 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-5 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-6 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-7 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-8 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                    <li class="color-9 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative"></li>
                </ul>
            </div>
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Modes</h3>
                <div class="gi-tools-rtl flex flex-wrap flex-row justify-between">
                    <div class="mode-primary gi-tools-item w-[125px] mb-[10px] text-center mode active-rtl ltr" data-gi-mode-tool="ltr">
                        <img src="{{ asset('assets1/img/tools/ltr.png') }}" alt="ltr" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">LTR</p>
                    </div>
                    <div class="gi-tools-item w-[125px] mb-[10px] text-center mode rtl" data-gi-mode-tool="rtl">
                        <img src="{{ asset('assets1/img/tools/rtl.png') }}" alt="rtl" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">RTL</p>
                    </div>
                </div>
            </div>
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Dark Modes</h3>
                <div class="gi-tools-dark flex flex-wrap flex-row justify-between">
                    <div class="mode-primary gi-dark-item mode w-[125px] mb-[10px] text-center active-dark light" data-gi-mode-tool="light">
                        <img src="{{ asset('assets1/img/tools/light.png') }}" alt="light" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">Light</p>
                    </div>
                    <div class="gi-dark-item w-[125px] mb-[10px] text-center mode dark" data-gi-mode-tool="dark">
                        <img src="{{ asset('assets1/img/tools/dark.png') }}" alt="dark" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">Dark</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugins JS -->
    <script src="{{ asset('assets1/js/plugins/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('assets1/js/plugins/countdownTimer.js') }}"></script> --}}
    <script src="{{ asset('assets1/js/plugins/infiniteslidev2.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/nouislider.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/wow.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset('assets1/js/main.js') }}"></script>
    <script src="{{ asset('assets1/js/demo-1.js') }}"></script>

    <script>

        //xóa sản phẩm
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.gi-trash-o').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();

                    // if (confirm('Bạn có muốn xóa không?')) {
                        const cartItemId = this.closest('li').getAttribute('data-id');

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
                    // }
                });
            });
        });
        //xóa sản phẩm


    </script>
</body>



</html>
