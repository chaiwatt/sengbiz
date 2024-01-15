<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>ประกาศฟรี เซ้ง/ขายกิจการ ขายอสังหาริมทรัพท์ | เซ้งกิจการ SengBiz</title>

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <!-- Required meta tags -->

    <link href="assets/plugins/aos/aos.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/plugins/OwlCarousel2/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/OwlCarousel2/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet">
    <link href="assets/plugins/ion.rangeSlider/ion.rangeSlider.min.css" rel="stylesheet">
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="assets/plugins/select2-bootstrap-5/select2-bootstrap-5-theme.min.css" rel="stylesheet">
    <!-- Custom style for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- start header -->
    <div class="bg-white sticky-top header">
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.html" aria-label="navbar-brand">
                    <img src="assets/images/logo.png" alt="logo" decoding="async">
                </a>
                <div class="d-flex order-lg-2">
                    <!-- start button -->
                    <a href="#"
                        class="d-flex align-items-center justify-content-center p-0 rounded-5 btn-user position-relative"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"
                        data-bs-title="envelope-count" aria-label="envelope-count">
                        <i class="fa-solid fa-envelope"></i>
                        <span
                            class="align-items-center bg-primary d-flex end-0 fs-11 justify-content-center nav-count position-absolute rounded-circle text-white">0</span>
                    </a>

                    <a href="add-listing.html" class="btn btn-primary d-none d-sm-flex fw-medium gap-2 hstack rounded-5"
                        aria-label="ลงประกาศ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        <div class="vr d-none d-sm-inline-block"></div>
                        <span class="d-none d-sm-inline-block">ลงประกาศ</span>
                    </a>
                    <!-- end /. button -->
                    <!-- start navbar toggle button -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span id="nav-icon" class="">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <!-- end /. navbar toggle button -->
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                ขาย/เซ้งกิจการ
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item dropdown-toggle active" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">ธุรกิจก่อสร้าง/วิศวกรรม</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item active"
                                                href="listings-list-left.html">รับเหมาก่อสร้าง</a></li>
                                        <li><a class="dropdown-item"
                                                href="listings-list-right.html">ร้านขายวัสดุก่อสร้าง</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="listings-list-right.html">ธุรกิจด้านการก่อสร้างอื่นๆ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">ธุรกิจการเกษตร</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="listings-grid-1-left.html">ฟาร์มเลี้ยงสัตว์</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="listings-grid-1-right.html">ร้านขายอุปกรณ์การเกษตร</a>
                                        </li>
                                        <li><a class="dropdown-item" href="listings-grid-1-right.html">ไร่นา</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="listings-grid-1-right.html">ธุรกิจการเกษตรอื่นๆ</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle material-ripple " href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="typcn typcn-weather-stormy top-menu-icon"></i>อสังหาริมทรัพย์
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dashboard/dashboard.html">บ้านเดี่ยว</a></li>
                                <li><a class="dropdown-item" href="dashboard/bookings.html">คอนโด</a></li>
                                <li><a class="dropdown-item" href="dashboard/messages.html">ทาว์นโฮม</a></li>
                                <li><a class="dropdown-item" href="dashboard/wallet.html">ตึกแถว/อาคารพาณิชย์</a></li>
                                <li><a class="dropdown-item" href="dashboard/profile.html">ที่ดิน</a></li>
                                <li><a class="dropdown-item" href="dashboard/add-listing.html">อสังหาฯอื่นๆ</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle material-ripple" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="typcn typcn-weather-stormy top-menu-icon"></i>แฟรนไชส์
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dashboard/dashboard.html">แฟรนไชส์ก๋วยเตี๋ยว</a></li>
                                <li><a class="dropdown-item" href="dashboard/bookings.html">แฟรนไชส์กาแฟ</a></li>
                                <li><a class="dropdown-item" href="dashboard/messages.html">แฟรนไชส์เครื่องดื่ม</a></li>
                                <li><a class="dropdown-item" href="dashboard/wallet.html">แฟรนไชส์อาหาร</a></li>
                                <li><a class="dropdown-item" href="dashboard/profile.html">แฟรนไชส์ไอศครีม</a></li>
                                <li><a class="dropdown-item" href="dashboard/add-listing.html">แฟรนไชส์อื่นๆ</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle material-ripple" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="typcn typcn-weather-stormy top-menu-icon"></i>พื้นที่ให้เช่า
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dashboard/dashboard.html">แฟรนไชส์ก๋วยเตี๋ยว</a></li>
                                <li><a class="dropdown-item" href="dashboard/bookings.html">แฟรนไชส์กาแฟ</a></li>
                                <li><a class="dropdown-item" href="dashboard/messages.html">แฟรนไชส์เครื่องดื่ม</a></li>
                                <li><a class="dropdown-item" href="dashboard/wallet.html">แฟรนไชส์อาหาร</a></li>
                                <li><a class="dropdown-item" href="dashboard/profile.html">แฟรนไชส์ไอศครีม</a></li>
                                <li><a class="dropdown-item" href="dashboard/add-listing.html">แฟรนไชส์อื่นๆ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listings-map-grid-1.html">เข้าสู่ระบบ</a>
                        </li>

                    </ul>
                    <div class="d-sm-none">
                        <!-- start button -->
                        <a href="#" class="btn btn-primary d-flex gap-2 hstack justify-content-center rounded-3"
                            aria-label="signin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            <div class="vr d-none d-sm-inline-block"></div>
                            <span>Add Listing</span>
                        </a>
                        <!-- end /. button -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- end /. navbar -->
        <!-- start header search bar  -->
        <div class="bg-white border-bottom border-top p-3 p-xl-0 search-bar">
            <div class="row g-3 g-xl-0">
                <!-- search bar title -->
                {{-- <div class="col-12 d-xl-none">
                    <h2 class="fw-semibold text-center search-bar-title mb-0">Find what<br> you <span
                            class="font-caveat text-primary">want</span></h2>
                </div> --}}

                <div class="col-md-2 col-lg-2 col-xl-3 d-none d-lg-block">
                    <!-- Start Search Select -->
                    <div class="search-select has-icon position-relative">
                        <select class="select2 form-select" aria-label="===พื้นที่===">
                            <option selected>===พื้นที่===</option>
                            <option value="1">กระบี่</option>
                            <option value="2">กรุงเทพมหานคร</option>
                            <option value="3">ขอนแก่น</option>
                            <option value="4">Sales & Marketing</option>
                            <option value="5">Music & Audio</option>
                        </select>
                        <svg class="form-icon-start position-absolute top-50 search-icon z-1 bi bi-geo-alt"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </div>
                    <!-- /.End Search Select -->
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3 d-none d-lg-block">
                    <!-- Start Search Select -->
                    <div class="search-select has-icon position-relative">
                        <select class="select2 form-select" aria-label="===หมวดหมู่===">
                            <option selected>===หมวดหมู่===</option>
                            <option value="1">อสังหาริมทรัพย์</option>
                            <option value="2">ขาย/เซ้งกิจการ</option>
                            <option value="3">แฟรนไชส์</option>
                            <option value="4">พื้นที่ให้เช่า</option>
                            {{-- <option value="5">Music & Audio</option> --}}
                        </select>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="form-icon-start position-absolute top-50 search-icon z-1 bi bi-tags"
                            viewBox="0 0 16 16">
                            <path
                                d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                            <path
                                d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                        </svg>
                        <!-- <i class="fa-solid fa-sack-dollar fs-18 search-icon"></i> -->
                        {{-- <svg class="form-icon-start position-absolute top-50 search-icon z-1 bi bi-app-indicator"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg> --}}
                    </div>
                    <!-- /.End Search Select -->
                </div>
                <div class="col-lg-2 col-md-2 col-mg-2 d-xl-none gap-3 gap-md-2 hstack justify-content-center">
                    <a href="#"
                        class="sidebarCollapse align-items-center d-flex justify-content-center filters-text fw-semibold gap-2">
                        <i class="fa-solid fa-arrow-up-short-wide fs-18"></i>
                        <span>กรอง</span>
                    </a>
                    <div class="h-75 mt-auto vr d-md-none"></div>
                    {{-- <a href="#" id="mapCollapse"
                        class="align-items-center d-flex justify-content-center filters-text fw-semibold gap-2">
                        <i class="fa-solid fa-map-location-dot fs-18"></i>
                        <span>Map</span>
                    </a> --}}
                </div>
                <div class="col-md-9 col-lg-5 col-xl-6">
                    <div class="search-select-input has-icon has-icon-y position-relative">
                        <!-- input -->
                        <input class="form-control" type="text" placeholder="ค้นหา ...">
                        <!-- icon -->
                        <svg class="form-icon-start position-absolute top-50 bi bi-pin-map-fill"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                            <path fill-rule="evenodd"
                                d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                        <!-- icon -->
                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                            <a href="#" class="btn-icon justify-content-center text-primary" data-bs-title="ค้นหา"
                                aria-label="ค้นหา">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </a>
                        </div>
                        <!-- select -->
                        {{-- <select class="input-select position-absolute top-50">
                            <option selected>0.5 km</option>
                            <option value="1">1 km</option>
                            <option value="2">5 km</option>
                            <option value="3">10 km</option>
                        </select> --}}
                    </div>

                </div>
                {{-- <button type="button" class="btn btn-primary w-30">Apply filters</button> --}}
            </div>
        </div>
        <!-- end /. header search bar  -->
    </div>
    <!-- end /. header -->
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
                            <div class="mb-4 border-bottom pb-4">
                                <div class="mb-3">
                                    <h4 class="fs-5 fw-semibold mb-1">ช่วงราคา</h4>
                                    <p class="mb-0 small">กำหนดช่วงราคาค้นหา</p>
                                </div>
                                <!-- Start Range Slider -->
                                <div class="js-range-slider"></div>
                                <!-- End Range Slider -->
                            </div>
                            <div class="mb-4 border-bottom pb-4">
                                <div class="mb-3">
                                    <h4 class="fs-5 fw-semibold mb-2">หมวดหมู่</h4>
                                    <p class="mb-0 small">เลือกหมวดหมู่ค้นหา</p>
                                </div>
                                <!-- Start Form Check -->
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="skillsTwo" checked>
                                    <label class="form-check-label" for="skillsTwo">ขาย/เซ้งกิจการ<span
                                            class="count fs-13 ms-1 text-muted">(31)</span></label>
                                </div>
                                <!-- End Form Check -->
                                <!-- Start Form Check -->
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="skillsOne">
                                    <label class="form-check-label" for="skillsOne">อสังหาริมทรัพย์<span
                                            class="count fs-13 ms-1 text-muted">(62)</span></label>
                                </div>
                                <!-- End Form Check -->

                                <!-- Start Form Check -->
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="skillsThree">
                                    <label class="form-check-label" for="skillsThree">แฟรนไชส์<span
                                            class="count fs-13 ms-1 text-muted">(20)</span></label>
                                </div>
                                <!-- End Form Check -->
                                <!-- Start Form Check -->
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="skillsFour">
                                    <label class="form-check-label" for="skillsFour">รับฝากขาย<span
                                            class="count fs-13 ms-1 text-muted">(43)</span></label>
                                </div>
                                <!-- End Form Check -->
                                <!-- Start Form Check -->
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="skillsFive">
                                    <label class="form-check-label" for="skillsFive">พื้นที่ให้เช่า<span
                                            class="count fs-13 ms-1 text-muted">(16)</span></label>
                                </div>
                                <!-- End Form Check -->

                            </div>
                            <div class="mb-4 border-bottom pb-4">
                                <div class="mb-3">
                                    <h4 class="fs-5 fw-semibold mb-1">เรียงลำดับ</h4>
                                    <p class="mb-0 small">เลือกรายการเรียงลำดับการแสดง</p>
                                </div>
                                <!-- Start Select2 -->
                                <select class="form-select" aria-label="ล่าสุด">
                                    <option value="1">ล่าสุด</option>
                                    <option value="2">ใกล้ฉัน</option>
                                    <option value="3">โหวตสูงสุด</option>
                                    <option value="4">ตามตัวอักษร</option>
                                </select>
                                <!-- /.End Select2 -->
                            </div>
                            <!-- start apply button -->
                            <button type="button" class="btn btn-primary w-100">ค้นหา</button>
                            <!-- end /. apply button -->
                            <!-- start clear filters -->
                            <a href="#"
                                class="align-items-center d-flex fw-medium gap-2 justify-content-center mt-2 small text-center"
                                aria-label="ล้างข้อมูล">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                    <path
                                        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                </svg>
                                ล้างข้อมูล
                            </a>
                            <!-- end /. clear filters -->
                        </div>
                    </div>
                    <!-- end /. sidebar filters -->
                </aside>

                <div class="col-xl-9 ps-lg-4 ps-xl-5 sidebar">
                    <!-- start toolbox  -->
                    {{-- <div class="d-flex flex-wrap align-items-center mb-3 gap-2">
                        <div class="col fs-18 text-nowrap">All <span class="fw-bold text-dark">9,069</span> listing
                            found</div>

                    </div> --}}
                    <!-- end /. toolbox  -->
                    <!-- start card list -->
                    <div class="card border-0 shadow-sm overflow-hidden rounded-4 mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"
                            aria-label="เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-5 col-xl-4 position-relative">
                                    <div class="card-image-hover dark-overlay h-100 overflow-hidden position-relative">
                                        <!-- start image -->
                                        <img src="assets/images/place/01.jpg" alt=""
                                            class="h-100 w-100 object-fit-cover"
                                            alt="เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า"
                                            aria-label="เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า" decoding="async">
                                        <!-- end /. image -->
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#aa" aria-label="ขาย/เซ้งกิจการ">ขาย/เซ้งกิจการ</a>

                                        </div>
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#bb" aria-label="เชียงใหม่">เชียงใหม่</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-xl-8 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div
                                            class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-eye"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary">จำนวนดู 2,391 ครั้ง</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h4 class="fs-18 fw-semibold mb-0">
                                            ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า

                                        </h4>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3 fs-15">ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า
                                            ย่านสาทร-นราธิวาส เป็นแหล่งธุรกิจ
                                            อยู่ติด BRT สาทร ใกล้ BTS สถานีช่องนนทรี
                                            ล้อมรอบด้วยตึกมากมายเช่น ตึกเอ็มไพน์
                                        </p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901"
                                                class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-clock" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                </svg>
                                                <span>วันนี้</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                                    <path
                                                        d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                </svg>
                                                <span>เมืองเชียงใหม่, เชียงใหม่</span>

                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-tags" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                    <path
                                                        d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                                </svg>
                                                <span>ขาย/เซ้งกิจการ</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-pin-map" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z" />
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                                                </svg>
                                                <span>MRT</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                                </svg>
                                                <span>รับนายหน้า</span>
                                            </a>
                                            {{-- <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a> --}}
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm overflow-hidden rounded-4 mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"
                            aria-label="เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-5 col-xl-4 position-relative">
                                    <div class="card-image-hover dark-overlay h-100 overflow-hidden position-relative">
                                        <!-- start image -->
                                        <img src="assets/images/place/01.jpg" alt="image" decoding="async"
                                            class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#aa">ขาย/เซ้งกิจการ</a>

                                        </div>
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#bb">เชียงใหม่</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-xl-8 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div
                                            class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-eye"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary">จำนวนดู 2,391 ครั้ง</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h4 class="fs-18 fw-semibold mb-0">
                                            ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า

                                        </h4>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3 fs-15">ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า
                                            ย่านสาทร-นราธิวาส เป็นแหล่งธุรกิจ
                                            อยู่ติด BRT สาทร ใกล้ BTS สถานีช่องนนทรี
                                            ล้อมรอบด้วยตึกมากมายเช่น ตึกเอ็มไพน์
                                        </p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901"
                                                class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-clock" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                </svg>
                                                <span>วันนี้</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                                    <path
                                                        d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                </svg>
                                                <span>เมืองเชียงใหม่, เชียงใหม่</span>

                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-tags" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                    <path
                                                        d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                                </svg>
                                                <span>ขาย/เซ้งกิจการ</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-train-lightrail-front"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 0a.5.5 0 0 0 0 1h1v1.011c-1.525.064-3.346.394-4.588.655C1.775 2.904 1 3.915 1 5.055V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V5.055c0-1.14-.775-2.15-1.912-2.39-1.242-.26-3.063-.59-4.588-.654V1h1a.5.5 0 0 0 0-1zM8 3c1.497 0 3.505.356 4.883.644.653.137 1.117.722 1.117 1.411V13.5a1.5 1.5 0 0 1-1.072 1.438 75.999 75.999 0 0 1-.1-.792c-.092-.761-.2-1.752-.266-2.682A21.26 21.26 0 0 1 12.5 10c0-1.051.143-2.404.278-3.435.024-.187.048-.362.07-.522.112-.798-.42-1.571-1.244-1.697C10.644 4.199 9.136 4 8 4c-1.136 0-2.645.2-3.604.346-.825.126-1.356.9-1.244 1.697.022.16.046.335.07.522C3.357 7.596 3.5 8.949 3.5 10c0 .428-.024.933-.062 1.464a57.32 57.32 0 0 1-.266 2.682c-.038.31-.072.58-.1.792A1.5 1.5 0 0 1 2 13.5V5.055c0-.69.464-1.274 1.117-1.41C4.495 3.354 6.503 3 8 3m3.835 11.266c.034.28.066.53.093.734H4.072a62.692 62.692 0 0 0 .328-3h2.246c.36 0 .704-.143.958-.396a.353.353 0 0 1 .25-.104h.292a.35.35 0 0 1 .25.104c.254.253.599.396.958.396H11.6c.068.808.158 1.621.236 2.266ZM6 13.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m3.5.5a.5.5 0 0 0 .5-.5.5.5 0 1 0 1 0 .5.5 0 0 0-1 0 .5.5 0 1 0-.5.5m-5.03-3c.019-.353.03-.692.03-1 0-.927-.104-2.051-.216-3h7.432c-.112.949-.216 2.073-.216 3 0 .308.011.647.03 1H9.354a.353.353 0 0 1-.25-.104 1.354 1.354 0 0 0-.958-.396h-.292c-.36 0-.704.143-.958.396a.353.353 0 0 1-.25.104zm-.315-5-.013-.096a.497.497 0 0 1 .405-.57C5.505 5.188 6.947 5 8 5s2.495.188 3.453.334a.497.497 0 0 1 .405.57L11.845 6z" />
                                                </svg>
                                                <span>MRT</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                                </svg>
                                                <span>รับนายหน้า</span>
                                            </a>
                                            {{-- <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a> --}}
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm overflow-hidden rounded-4 mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"
                            aria-label="เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-5 col-xl-4 position-relative">
                                    <div class="card-image-hover dark-overlay h-100 overflow-hidden position-relative">
                                        <!-- start image -->
                                        <img src="assets/images/place/01.jpg" alt="image" decoding="async"
                                            class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#aa">ขาย/เซ้งกิจการ</a>

                                        </div>
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#bb">เชียงใหม่</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-xl-8 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div
                                            class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-eye"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary">จำนวนดู 2,391 ครั้ง</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h4 class="fs-18 fw-semibold mb-0">
                                            ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า

                                        </h4>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3 fs-15">ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า
                                            ย่านสาทร-นราธิวาส เป็นแหล่งธุรกิจ
                                            อยู่ติด BRT สาทร ใกล้ BTS สถานีช่องนนทรี
                                            ล้อมรอบด้วยตึกมากมายเช่น ตึกเอ็มไพน์
                                        </p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901"
                                                class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-clock" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                </svg>
                                                <span>วันนี้</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                                    <path
                                                        d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                </svg>
                                                <span>เมืองเชียงใหม่, เชียงใหม่</span>

                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-tags" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                    <path
                                                        d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                                </svg>
                                                <span>ขาย/เซ้งกิจการ</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-train-lightrail-front"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 0a.5.5 0 0 0 0 1h1v1.011c-1.525.064-3.346.394-4.588.655C1.775 2.904 1 3.915 1 5.055V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V5.055c0-1.14-.775-2.15-1.912-2.39-1.242-.26-3.063-.59-4.588-.654V1h1a.5.5 0 0 0 0-1zM8 3c1.497 0 3.505.356 4.883.644.653.137 1.117.722 1.117 1.411V13.5a1.5 1.5 0 0 1-1.072 1.438 75.999 75.999 0 0 1-.1-.792c-.092-.761-.2-1.752-.266-2.682A21.26 21.26 0 0 1 12.5 10c0-1.051.143-2.404.278-3.435.024-.187.048-.362.07-.522.112-.798-.42-1.571-1.244-1.697C10.644 4.199 9.136 4 8 4c-1.136 0-2.645.2-3.604.346-.825.126-1.356.9-1.244 1.697.022.16.046.335.07.522C3.357 7.596 3.5 8.949 3.5 10c0 .428-.024.933-.062 1.464a57.32 57.32 0 0 1-.266 2.682c-.038.31-.072.58-.1.792A1.5 1.5 0 0 1 2 13.5V5.055c0-.69.464-1.274 1.117-1.41C4.495 3.354 6.503 3 8 3m3.835 11.266c.034.28.066.53.093.734H4.072a62.692 62.692 0 0 0 .328-3h2.246c.36 0 .704-.143.958-.396a.353.353 0 0 1 .25-.104h.292a.35.35 0 0 1 .25.104c.254.253.599.396.958.396H11.6c.068.808.158 1.621.236 2.266ZM6 13.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m3.5.5a.5.5 0 0 0 .5-.5.5.5 0 1 0 1 0 .5.5 0 0 0-1 0 .5.5 0 1 0-.5.5m-5.03-3c.019-.353.03-.692.03-1 0-.927-.104-2.051-.216-3h7.432c-.112.949-.216 2.073-.216 3 0 .308.011.647.03 1H9.354a.353.353 0 0 1-.25-.104 1.354 1.354 0 0 0-.958-.396h-.292c-.36 0-.704.143-.958.396a.353.353 0 0 1-.25.104zm-.315-5-.013-.096a.497.497 0 0 1 .405-.57C5.505 5.188 6.947 5 8 5s2.495.188 3.453.334a.497.497 0 0 1 .405.57L11.845 6z" />
                                                </svg>
                                                <span>MRT</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                                </svg>
                                                <span>รับนายหน้า</span>
                                            </a>
                                            {{-- <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a> --}}
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm overflow-hidden rounded-4 mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"
                            aria-label="เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-5 col-xl-4 position-relative">
                                    <div class="card-image-hover dark-overlay h-100 overflow-hidden position-relative">
                                        <!-- start image -->
                                        <img src="assets/images/place/01.jpg" alt="image" decoding="async"
                                            class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#aa" aria-label="ขาย/เซ้งกิจการ">ขาย/เซ้งกิจการ</a>

                                        </div>
                                        <div
                                            class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                            <a href="#bb" aria-label="เชียงใหม่">เชียงใหม่</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-xl-8 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div
                                            class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-eye"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary">จำนวนดู 2,391 ครั้ง</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h4 class="fs-18 fw-semibold mb-0">
                                            ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า

                                        </h4>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3 fs-15">ด่วน!! เซ้งล๊อคขายอาหารในศูนย์อาหารฮ่องกงพลาซ่า
                                            ย่านสาทร-นราธิวาส เป็นแหล่งธุรกิจ
                                            อยู่ติด BRT สาทร ใกล้ BTS สถานีช่องนนทรี
                                            ล้อมรอบด้วยตึกมากมายเช่น ตึกเอ็มไพน์
                                        </p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901"
                                                class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-clock" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                </svg>
                                                <span>วันนี้</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                                    <path
                                                        d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                </svg>
                                                <span>เมืองเชียงใหม่, เชียงใหม่</span>

                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-tags" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                    <path
                                                        d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                                </svg>
                                                <span>ขาย/เซ้งกิจการ</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-train-lightrail-front"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 0a.5.5 0 0 0 0 1h1v1.011c-1.525.064-3.346.394-4.588.655C1.775 2.904 1 3.915 1 5.055V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V5.055c0-1.14-.775-2.15-1.912-2.39-1.242-.26-3.063-.59-4.588-.654V1h1a.5.5 0 0 0 0-1zM8 3c1.497 0 3.505.356 4.883.644.653.137 1.117.722 1.117 1.411V13.5a1.5 1.5 0 0 1-1.072 1.438 75.999 75.999 0 0 1-.1-.792c-.092-.761-.2-1.752-.266-2.682A21.26 21.26 0 0 1 12.5 10c0-1.051.143-2.404.278-3.435.024-.187.048-.362.07-.522.112-.798-.42-1.571-1.244-1.697C10.644 4.199 9.136 4 8 4c-1.136 0-2.645.2-3.604.346-.825.126-1.356.9-1.244 1.697.022.16.046.335.07.522C3.357 7.596 3.5 8.949 3.5 10c0 .428-.024.933-.062 1.464a57.32 57.32 0 0 1-.266 2.682c-.038.31-.072.58-.1.792A1.5 1.5 0 0 1 2 13.5V5.055c0-.69.464-1.274 1.117-1.41C4.495 3.354 6.503 3 8 3m3.835 11.266c.034.28.066.53.093.734H4.072a62.692 62.692 0 0 0 .328-3h2.246c.36 0 .704-.143.958-.396a.353.353 0 0 1 .25-.104h.292a.35.35 0 0 1 .25.104c.254.253.599.396.958.396H11.6c.068.808.158 1.621.236 2.266ZM6 13.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m3.5.5a.5.5 0 0 0 .5-.5.5.5 0 1 0 1 0 .5.5 0 0 0-1 0 .5.5 0 1 0-.5.5m-5.03-3c.019-.353.03-.692.03-1 0-.927-.104-2.051-.216-3h7.432c-.112.949-.216 2.073-.216 3 0 .308.011.647.03 1H9.354a.353.353 0 0 1-.25-.104 1.354 1.354 0 0 0-.958-.396h-.292c-.36 0-.704.143-.958.396a.353.353 0 0 1-.25.104zm-.315-5-.013-.096a.497.497 0 0 1 .405-.57C5.505 5.188 6.947 5 8 5s2.495.188 3.453.334a.497.497 0 0 1 .405.57L11.845 6z" />
                                                </svg>
                                                <span>MRT</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                                </svg>
                                                <span>รับนายหน้า</span>
                                            </a>
                                            {{-- <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a> --}}
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- start pagination -->
                    <nav class="justify-content-center mt-5 pagination align-items-center">
                        <a class="prev page-numbers" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                            </svg>
                            ก่อนหน้า
                        </a>
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">
                            ถัดไป
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </nav>
                    <!-- end /. pagination -->
                </div>
            </div>
        </div>
    </div>
    <!-- start footer -->
    <footer class="footer-dark main-footer overflow-hidden position-relative pt-5">
        <div class="container border-top">
            <div class="align-items-center g-3 py-4 row">
                <div class="col-lg-auto">
                    <!-- start footer nav -->
                    <ul class="list-unstyled list-separator mb-2 footer-nav">
                        <li class="list-inline-item"><a href="#">นโยบายความเป็นส่วนตัว</a></li>
                        <li class="list-inline-item"><a href="#">แผนผังเว็บไซต์</a></li>
                        <li class="list-inline-item"><a href="#">คุ้กกี้</a></li>
                    </ul>
                    <!-- end /. footer nav -->
                </div>
                <div class="col-lg order-md-first">
                    <div class="align-items-center row">
                        <!-- start footer logo -->
                        <a href="index.html" class="col-sm-auto footer-logo mb-2 mb-sm-0" aria-label="logo">
                            <img src="assets/images/logo-white.png" alt="logo" decoding="async">
                        </a>
                        <!-- end /. footer logo -->
                        <!-- start text -->
                        <div class="col-sm-auto copy">© 2023 เซ้งกิจการ | SengBiz - All Rights Reserved</div>
                        <!-- end /. text -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end /. footer -->
    <!-- Optional JavaScript -->
    {{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script> --}}
    <script src="assets/plugins/jQuery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/aos/aos.min.js"></script>
    <script src="assets/plugins/macy/macy.js"></script>
    <script src="assets/plugins/simple-parallax/simpleParallax.min.js"></script>
    <script src="assets/plugins/OwlCarousel2/owl.carousel.min.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.min.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/ion.rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/select2/select2.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>


</html>