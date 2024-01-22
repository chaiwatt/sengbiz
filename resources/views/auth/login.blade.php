@extends('layouts.main')

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
                <h2 class="display-6 fw-semibold mb-4" style="font-size: 26px">เข้าสู่ระบบ
                </h2>
                <!-- /.End Header Text -->
                <!-- Start Social Button Wrapper -->
                <div class="d-grid gap-3 mb-2">
                    <!-- Start Social login Button -->


                    <!-- /.End Social login Button -->
                    <!-- Start Social login Button -->
                    <a class="align-items-center btn btn-lg btn-light d-flex facebook-btn position-relative text-start"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                        <span class="ms-3">เข้าสู่ระบบด้วย Facebook</span>
                    </a>
                    <!-- Start Social login Button -->
                </div>
                <!-- /.End Social Button Wrapper -->
                <!-- Start Text -->

                <!-- /.End Text -->
                <!-- Start Divider -->
                <div class="align-items-center my-5 mt-5 mb-5">
                    <span class="fs-16 fw-bold px-3 text-dark">หรือ เข้าสู่ระบบด้วยอีเมล</span>
                </div>
                <!-- /.End Divider -->
                <form class="register-form" method="POST" action="{{route('login')}}">
                    @csrf
                    <!-- Start Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">อีเมล</label>
                        <input type="email" class="form-control @error('email')
                        is-invalid
                        @enderror
                        
                        ">
                        @error('email')
                        <div class="invalid-feedback text-start text-danger">กรอกอีเมลให้ถูกต้อง</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="required">รหัสผ่าน</label>
                        <input id="password" type="password" class="form-control password" autocomplete="off">
                        <i data-bs-toggle="#password" class="fa-regular fa-eye-slash toggle-password"></i>
                        @error('phone')
                        <div class="invalid-feedback text-start text-danger">กรอกรหัสผ่านให้ถูกต้อง</div>
                        @enderror
                    </div>
                    <!-- /.End Form Group -->

                    <div class="form-group mb-4">
                        <label class="required">เบอร์โทรศัพท์</label>
                        <input id="phone" type="password" class="form-control password" autocomplete="off">
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
                <div class="bottom-text text-center mt-4"> ยังไม่มีบัญชี? <a href="{{route('register')}}"
                        class="fw-medium text-decoration-underline">สมัครใช้งาน</a>
                    <br> ฉันลืม <a href="forgot-password.html" class="fw-medium text-decoration-underline">รหัสผ่าน</a>
                </div>
                <!-- /.End Bottom Text -->
            </div>
        </div>
        <div class="col-xl-7 d-none d-xl-block">
            <div class="background-image bg-light d-flex flex-column h-100 justify-content-center rounded-4"
                data-image-src="assets/images/lines.svg" style="position: relative">
                <div class=" text-center">

                    <img src="assets/images/authentication/log-in.webp" alt="" class="img-fluid" style="position: absolute;max-width: 700px;bottom: 0;left: 50%;
  transform: translateX(-50%);">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection