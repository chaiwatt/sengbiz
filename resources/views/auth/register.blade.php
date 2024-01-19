@extends('layouts.blank')

@section('content')
<div class="p-3 p-sm-5">
    <div class="row">
        <div class="col-xl-12 text-center mb-4">
            <h2 class="display-6 fw-semibold mb-3">SengBiz<span class="font-caveat text-primary"> ประกาศฟรี</span>
            </h2>
        </div>
    </div>
    <div class="row g-2 g-xl-5 justify-content-between">
        <div class="col-xl-5 d-flex justify-content-center">
            <div class=" overflow-hidden position-relative text-center" style="width: 80%">
                <!-- Start Header Text -->

                <h2 class="display-6 fw-semibold" style="font-size: 26px">ลงทะเบียน
                </h2>

                <!-- /.End Divider -->
                <form class="register-form my-5">
                    <!-- Start Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">ชื่อ</label>
                        <input type="text" class="form-control">
                        {{-- <div class="invalid-feedback text-start">Enter your valid email</div> --}}
                    </div>
                    <div class="form-group mb-4">
                        <label class="required">อีเมล</label>
                        <input type="email" class="form-control">
                        {{-- <div class="invalid-feedback text-start">Enter your valid email</div> --}}
                    </div>
                    <!-- /.End Form Group -->
                    <!-- Start Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">รหัสผ่าน</label>
                        <input id="password" type="password" class="form-control password" autocomplete="off">
                        <i data-bs-toggle="#password" class="fa-regular fa-eye-slash toggle-password"></i>
                    </div>
                    <!-- /.End Form Group -->
                    <!-- Start Checkbox -->

                    <!-- /.End Checkbox -->
                    <!-- Start Button -->
                    <button type="submit" class="btn btn-primary btn-lg w-100">เข้าสู่ระบบ</button>
                    <!-- End Button -->
                </form>
                <!-- Start Bottom Text -->
                <div class="bottom-text text-center mt-4"> มีบัญชีแล้ว? <a href="{{route('login')}}"
                        class="fw-medium text-decoration-underline">เข้าสู่ระบบ</a>

                </div>
                <!-- /.End Bottom Text -->
            </div>
        </div>
        <div class="col-xl-7 d-none d-xl-block">
            <div class="background-image bg-light d-flex flex-column h-100 justify-content-center rounded-4"
                data-image-src="assets/images/lines.svg" style="position: relative">
                <div class=" text-center">

                    <img src="assets/images/authentication/signup.webp" alt="" class="img-fluid" style="position: absolute;max-width: 650px;bottom: 0;left: 50%;
  transform: translateX(-50%);">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection