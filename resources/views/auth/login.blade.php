@extends('layouts.blank')

@section('content')
<div class="p-3 p-sm-5">
    <div class="row g-2 g-xl-5 justify-content-between">
        <div class="col-xl-5 d-flex justify-content-center">
            <div class=" overflow-hidden position-relative text-center" style="width: 80%">
                <!-- Start Header Text -->

                <!-- /.End Header Text -->
                <!-- Start Social Button Wrapper -->
                <div class="d-grid gap-3 mb-3">
                    <!-- Start Social login Button -->


                    <!-- /.End Social login Button -->
                    <!-- Start Social login Button -->
                    <a class="align-items-center btn btn-lg btn-light d-flex google-btn position-relative text-start"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-google" viewBox="0 0 16 16">
                            <path
                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z">
                            </path>
                        </svg>
                        <span class="ms-3">เข้าสู่ระบบด้วย Google</span>
                    </a>
                    <!-- Start Social login Button -->
                </div>
                <!-- /.End Social Button Wrapper -->
                <!-- Start Text -->

                <!-- /.End Text -->
                <!-- Start Divider -->
                <div class="align-items-center d-flex my-5">
                    <hr class="flex-grow-1 m-0"> <span class="fs-16 fw-bold px-3 text-dark">หรือ</span>
                    <hr class="flex-grow-1 m-0">
                </div>
                <!-- /.End Divider -->
                <form class="register-form">
                    <!-- Start Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">อีเมล</label>
                        <input type="email" class="form-control is-invalid">
                        <div class="invalid-feedback text-start">Enter your valid email</div>
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
                    <div class="form-check mb-4 text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">จำฉันไว้</label>
                    </div>
                    <!-- /.End Checkbox -->
                    <!-- Start Button -->
                    <button type="submit" class="btn btn-primary btn-lg w-100">เข้าสู่ระบบ</button>
                    <!-- End Button -->
                </form>
                <!-- Start Bottom Text -->
                <div class="bottom-text text-center mt-4"> ยังไม่มีบัญชี? <a href="sign-up.html"
                        class="fw-medium text-decoration-underline">สมัครใช้งาน</a>
                    <br> ฉันลืม <a href="forgot-password.html" class="fw-medium text-decoration-underline">รหัสผ่าน</a>
                </div>
                <!-- /.End Bottom Text -->
            </div>
        </div>
        <div class="col-xl-7 d-none d-xl-block">
            <div class="background-image bg-light d-flex flex-column h-100 justify-content-center p-5 rounded-4"
                data-image-src="assets/images/lines.svg">
                <div class="py-5 text-center">

                    <img src="assets/images/authentication/log-in.webp" alt="" class="img-fluid"
                        style="max-width: 600px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection