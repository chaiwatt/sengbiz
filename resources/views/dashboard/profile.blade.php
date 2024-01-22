@extends('layouts.main')
@section('content')

<div class="py-3 py-xl-5 bg-gradient">
    <div class="container">

        <div class="row">

            @include('layouts.partial.dashboard-sidebar')

            <div class="col-xl-9 ps-lg-4 ps-xl-5 sidebar">
                <div class="card mb-4">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold mb-0">ข้อมูลของฉัน</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="required fw-medium mb-2">อีเมล</label>
                                    <input type="text" class="form-control" value="{{$user->email}}" required=""
                                        disabled>
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="required fw-medium mb-2">ชื่อ</label>
                                    <input type="text" class="form-control" value="{{$user->name}}" required="">
                                </div>
                                <!-- end /. form group -->
                            </div>

                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="required fw-medium mb-2">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" required="">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="fw-medium mb-2">Facebook</label>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="fw-medium mb-2">Youtube Channel</label>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="fw-medium mb-2">เว็บไซต์</label>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="fw-medium mb-2">รหัสผ่านใหม่
                                        (ถ้าไม่ต้องการเปลี่ยนให้ว่างไว้)</label>
                                    <input type="password" class="form-control">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="fw-medium mb-2">ยืนยันรหัสผ่านใหม่
                                        (ถ้าไม่ต้องการเปลี่ยนให้ว่างไว้)</label>
                                    <input type="password" class="form-control">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-12 mt-4 pt-lg-4 pt-3 text-left">
                                <a href="blog.html" class="btn btn-lg btn-primary">แก้ไขและบันทึก</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection