@extends('layout.main')
@section('main')

{{-- <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4 card-bg-fill">

            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Forgot Password?</h5>
                    <p class="text-muted">Reset password with velzon</p>
                </div>

                <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                    Enter your email and instructions will be sent to you!
                </div>
                <div class="p-2">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">Email</label>
                            <input id="email" type="email" placeholder="Enter Email..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="text-center mt-4">
                            <button class="btn  w-100" type="submit" style="background-color:rgb(82, 128, 82);color:white;">Send Reset Link</button>
                        </div>
                    </form><!-- end form -->
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

        <div class="mt-4 text-center">
            <p class="mb-0">Wait, I remember my password... <a href="{{ route('login')}}" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
        </div>

    </div>
</div> --}}


    <!-- Login section -->
        <section class="gi-login py-[40px] max-[767px]:py-[30px]">
            <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                    <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Send Email</h2>
                    <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Enter your email and instructions will be sent to you!</p>
                </div>
                <div class="gi-login-content max-w-[1000px] m-auto flex flex-row max-[991px]:flex-col max-[1199px]:px-[12px] max-[991px]:w-full">
                    <div class="gi-login-box w-[100%] px-[15px] max-[991px]:w-full max-[991px]:p-[0]">
                        <div class="gi-login-wrapper max-w-[530px] my-[0] mx-auto">
                            <div class="gi-login-container p-[30px] max-[575px]:p-[15px] border-[1px] border-solid border-[#eee] rounded-[5px] text-left bg-[#fff]">
                                <div class="gi-login-form">
                                    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col">
                                        @csrf
                                        <span class="gi-login-wrap flex flex-col mb-4">
                                            <label class="mb-[10px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Email</label>
                                            <input id="email" type="email" placeholder="Enter Email..." class="mb-[27px] px-[15px] bg-transparent border-[1px] border-solid border-[#eee] rounded-[5px] text-[#777] text-[14px] outline-[0] h-[50px] @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </span>
                                        <span class="gi-login-wrap gi-login-btn mt-[30px] flex flex-row justify-between items-center">
                                            <button class="btn btn-success gi-btn-1 btn py-[8px] px-[15px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center text-[14px] font-semibold relative rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" type="submit">Send Reset Link</button>
                                        </span>

                                        <div class="mt-2 text-center">
                                            <p class="mb-0">Wait, I remember my password... <a href="{{ route ('login')}}"style="color:red;"> Click here </a> </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Login section End -->
@endsection
