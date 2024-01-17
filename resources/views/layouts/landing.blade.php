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
                        data-bs-title="envelope-count" aria-label="0">
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




                @yield('content')
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