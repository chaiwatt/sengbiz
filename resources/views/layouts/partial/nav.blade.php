<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" aria-label="navbar-brand">
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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                                <li><a class="dropdown-item active" href="listings-list-left.html">รับเหมาก่อสร้าง</a>
                                </li>
                                <li><a class="dropdown-item" href="listings-list-right.html">ร้านขายวัสดุก่อสร้าง</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="listings-list-right.html">ธุรกิจด้านการก่อสร้างอื่นๆ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">ธุรกิจการเกษตร</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="listings-grid-1-left.html">ฟาร์มเลี้ยงสัตว์</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="listings-grid-1-right.html">ร้านขายอุปกรณ์การเกษตร</a>
                                </li>
                                <li><a class="dropdown-item" href="listings-grid-1-right.html">ไร่นา</a>
                                </li>
                                <li><a class="dropdown-item" href="listings-grid-1-right.html">ธุรกิจการเกษตรอื่นๆ</a>
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
                    <a class="nav-link dropdown-toggle material-ripple" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle material-ripple" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
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