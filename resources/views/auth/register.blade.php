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

                <h2 class="display-6 fw-semibold" style="font-size: 26px">ลงทะเบียน
                </h2>

                <!-- /.End Divider -->
                <form class="register-form my-5 mt-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Start Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">ชื่อ</label>
                        <input type="text" class="form-control">

                        @error('name')
                        <div class="invalid-feedback text-start text-danger">กรอกชื่อให้ถูกต้อง</div>
                        @enderror

                    </div>
                    <div class="form-group mb-4">
                        <label class="required">ผู้ประกาศ</label>
                        {{-- <input id="phone" type="text" class="form-control password" autocomplete="off"> --}}
                        <select class="form-select" name="owner">
                            <option value="1">เจ้าของ</option>
                            <option value="2">Broker</option>
                            <option value="3">Agent</option>
                        </select>
                    </div>
                    <!-- Start Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">โทรศัพท์</label>
                        <input name="phone" type="text" class="form-control password" autocomplete="off">
                        @error('phone')
                        <div class="invalid-feedback text-start text-danger">กรอกเบอร์โทรศัพท์ให้ถูกต้อง</div>
                        @enderror

                    </div>

                    <!-- /.End Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">อีเมล</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                        <div class="invalid-feedback text-start text-danger">กรอกอีเมลให้ถูกต้อง</div>
                        @enderror
                    </div>
                    <!-- Start Form Group -->
                    <div class="form-group mb-4">
                        <label class="required">รหัสผ่าน</label>
                        <input name="password" type="password" class="form-control password" autocomplete="off">
                        <i data-bs-toggle="#password" class="fa-regular fa-eye-slash toggle-password"></i>
                        @error('phone')
                        <div class="invalid-feedback text-start text-danger">กรอกรหัสผ่านให้ถูกต้อง</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="required">ยืนรหัสผ่าน</label>
                        <input name="password_confirmation" type="password" class="form-control password"
                            autocomplete="off">
                        <i data-bs-toggle="#password" class="fa-regular fa-eye-slash toggle-password"></i>
                    </div>
                    <!-- /.End Form Group -->
                    <!-- Start Checkbox -->

                    <!-- /.End Checkbox -->
                    <!-- Start Button -->
                    <button type="submit" class="btn btn-primary btn-lg w-100">สมัครใช้งาน</button>
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

                    <img src="assets/images/authentication/signup.webp" alt="" class="img-fluid" style="position: absolute;max-width: 800px;bottom: 0;left: 50%;
              transform: translateX(-50%);">
                </div>
            </div>
        </div>
    </div>


</div>
@endsection