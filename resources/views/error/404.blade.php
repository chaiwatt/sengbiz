@extends('layouts.main')
@section('content')

<div class="py-5 bg-light mx-3 mb-3 rounded-4">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-7 text-center">
                <!-- start error text -->
                <h2 class="error-text font-caveat text-primary">404</h2>
                <!-- end /. error text -->
                <div class="">
                    <h2 class="fw-semibold mb-3 text-capitalize">ผิดพลาด</h2>
                    <p class="fs-16">ขออภัยค่ะ ไม่พบหน้าที่คุณต้องการ โปรดไปที่หน้าหลักเพื่อค้นหาประกาศที่คุณต้องการ</p>
                    <!-- start button -->
                    <a href="{{url('/')}}" class="btn btn-primary btn-lg mt-3">
                        <span>หน้าหลัก</span>
                    </a>
                    <!-- end /. button -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection