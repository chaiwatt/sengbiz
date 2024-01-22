@extends('layouts.main')
@section('content')

<div class="py-3 py-xl-5 bg-gradient">
    <div class="container">

        <div class="row">

            <aside class="col-xl-3 filters-col content pe-lg-4 pe-xl-5 shadow-end">

                <!-- start sidebar filters -->
                <div class="js-sidebar-filters-mobile">
                    <!-- filter header -->
                    <div
                        class="bg-white border-bottom d-flex justify-content-between align-items-center p-3 sidebar-filters-header d-xl-none">
                        <div
                            class="align-items-center btn-icon d-flex filter-close justify-content-center rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                            </svg>
                        </div>
                        <span class="fs-3 fw-semibold">Filters</span>
                        <span class="text-primary fw-medium">Clear</span>
                    </div>
                    <!-- end /. filter header -->
                    <div class="sidebar-filters-body p-3 p-xl-0">
                        <div class="border p-4 rounded-4">
                            <div class="align-items-center d-flex justify-content-between mb-4">
                                <h4 class="w-semibold mb-0">เมนู<span class="font-caveat text-primary">ประกาศ</span>
                                </h4>
                            </div>
                            <div class="align-items-center d-flex justify-content-between mb-3">
                                <div class="align-items-center d-flex fw-medium gap-1 fs-16">
                                    <i class="fa-circle fa-solid fs-10"></i>
                                    <a href="#"><span>ประกาศของฉัน</span></a>
                                </div>
                            </div>
                            <div class="align-items-center d-flex justify-content-between mb-3">
                                <div class="align-items-center d-flex fw-medium gap-1 fs-16">
                                    <i class="fa-circle fa-solid fs-10"></i>
                                    <a href="#"><span>บุคมาร์คของฉัน</span></a>
                                </div>
                            </div>
                            <div class="align-items-center d-flex justify-content-between mb-3">
                                <div class="align-items-center d-flex fw-medium gap-1 fs-16">
                                    <i class="fa-circle fa-solid fs-10"></i>
                                    <a href="#"><span>เพิ่มประกาศ</span></a>
                                </div>
                            </div>
                            <div class="align-items-center d-flex justify-content-between mb-3">
                                <div class="align-items-center d-flex fw-medium gap-1 fs-16">
                                    <i class="fa-circle fa-solid fs-10"></i>
                                    <a href="#"><span>ข้อมูลของฉัน</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </aside>


            <div class="col-xl-9 ps-lg-4 ps-xl-5 sidebar">

                <div class="card">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold my-1">ประกาศของฉัน</h6>
                    </div>
                    <div class="card-body">
                        {{-- <div class="table-responsive"> --}}
                            {{-- <div class="dataTables_wrapper dt-bootstrap5 no-footer"> --}}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-borderless category-list no-footer"
                                            id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr>


                                                    <th class="sorting">ประกาศ</th>
                                                    <th class="sorting">หมวดหมู่</th>

                                                    <th class="sorting">ประเภท
                                                    </th>
                                                    <th class="text-end sorting"
                                                        aria-label="View Booking: activate to sort column ascending">
                                                        เพิ่มเติม</th>
                                                </tr>
                                            </thead>
                                            <tbody>





                                                <tr class="odd">


                                                    <td>ขายทาวน์โฮม 2 ชั้น หมู่บ้านฮาบิทาวน์</td>
                                                    <td>อสังหาริมทรัพย์</td>


                                                    <td>
                                                        <div
                                                            class="align-items-center d-flex fw-medium gap-1 text-success fs-14">
                                                            <i class="fa-circle fa-solid fs-10"></i>
                                                            <span>แพกเจ Pro</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="bookings.html"
                                                            class="btn btn-success fw-medium btn-sm d-inline-flex align-items-center justify-content-center gap-1 ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pencil"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                                            </svg>
                                                            แก้ไข
                                                        </a>
                                                        <a href="bookings.html"
                                                            class="btn btn-primary fw-medium btn-sm d-inline-flex align-items-center justify-content-center gap-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-eye"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z">
                                                                </path>
                                                                <path
                                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0">
                                                                </path>
                                                            </svg>
                                                            ลบ
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="even">


                                                    <td>สำนักงานให้เช่า ถ.เพชรเกษม 5 ชั้น สไตล์</td>

                                                    <td>อสังหาริมทรัพย์</td>
                                                    <td>
                                                        <div
                                                            class="align-items-center d-flex fw-medium gap-1 text-primary fs-14">
                                                            <i class="fa-circle fa-solid fs-10"></i>
                                                            <span>ฟรี</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="bookings.html"
                                                            class="btn btn-success fw-medium btn-sm d-inline-flex align-items-center justify-content-center gap-1 ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pencil"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                                            </svg>
                                                            แก้ไข
                                                        </a>
                                                        <a href="bookings.html"
                                                            class="btn btn-primary fw-medium btn-sm d-inline-flex align-items-center justify-content-center gap-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-eye"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z">
                                                                </path>
                                                                <path
                                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0">
                                                                </path>
                                                            </svg>
                                                            ลบ
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{--
                            </div> --}}
                            {{-- </div> --}}
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold my-1">แพกเกจ</h6>
                    </div>
                    <div class="card-body">
                        {{-- <div class="table-responsive"> --}}
                            {{-- <div class="dataTables_wrapper dt-bootstrap5 no-footer"> --}}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover pricing-table table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <div class="fs-4 fw-semibold h6 mb-0 mb-2">รายละเอียด
                                                        </div>
                                                    </th>
                                                    <th scope="col">
                                                        <span class="font-caveat fs-3 text-primary">Basic</span>
                                                        <div class="d-flex pt-md-3">

                                                            <span class="display-4 fw-semibold">150</span><span
                                                                class="h3">บาท/ด</span>
                                                        </div>
                                                        <a href="#"
                                                            class="btn d-block mt-4 btn-outline-primary text-nowrap">ซื้อ</a>
                                                    </th>
                                                    <th scope="col">
                                                        <span class="font-caveat fs-3 text-primary">Pro</span>
                                                        <div class="d-flex pt-md-3">
                                                            <span class="display-4 fw-semibold">300</span><span
                                                                class="h3">บาท/ด</span>
                                                        </div>
                                                        <a href="#"
                                                            class="btn d-block mt-4 btn-primary text-nowrap">สั่งซื้อ</a>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <span
                                                            class="d-block fw-semibold h6 mb-0 text-nowrap">แสดงเมนูข้าง
                                                            (แสดงบนสุดหน้าจอโทรศัพท์)</span>
                                                    </th>
                                                    <td class="text-center">
                                                        <span><i
                                                                class="fa-circle-check fa-solid fs-4 text-success"></i></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span><i
                                                                class="fa-circle-check fa-solid fs-4 text-success"></i></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <span
                                                            class="d-block fw-semibold h6 mb-0 text-nowrap">โพสต์ลงเฟสบุคทันที</span>
                                                    </th>
                                                    <td class="text-center">
                                                        <span><i
                                                                class="fa-circle-check fa-solid fs-4 text-success"></i></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span><i
                                                                class="fa-circle-check fa-solid fs-4 text-success"></i></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <span
                                                            class="d-block fw-semibold h6 mb-0 text-nowrap">แสดงเมนูบนสุด
                                                            (Feature)</span>
                                                    </th>
                                                    <td class="text-center">
                                                        <span><i class="fa-solid fa-circle-xmark fs-4 text-danger"></i>
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span><i
                                                                class="fa-circle-check fa-solid fs-4 text-success"></i></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <span
                                                            class="d-block fw-semibold h6 mb-0 text-nowrap">แสดงเมนูด้านล่างหน้าประกาศ</span>
                                                    </th>
                                                    <td class="text-center">
                                                        <i class="fa-solid fa-circle-xmark fs-4 text-danger"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="fa-circle-check fa-solid fs-4 text-success"></i>
                                                    </td>

                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{--
                            </div> --}}
                            {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection