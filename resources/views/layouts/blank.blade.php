<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="theme-color" content="#FFFFFF">
    <link rel="canonical" href="{{urldecode(request()->url())}}" />
    <meta property="og:locale" content="th_TH" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{urldecode(request()->url())}}" />
    <meta property="og:site_name" content="เซ้งบิช" />
    <meta name="twitter:card" content="summary_large_image" />

    @php
    use Carbon\Carbon;

    // สุ่มจำนวนวันระหว่าง 50 ถึง 80
    $randomDays = mt_rand(50, 80);

    // วันที่ปัจจุบัน
    $now = Carbon::now();

    // หักจำนวนวันที่สุ่มได้
    $dateModified = $now->subDays($randomDays)->toDateString();
    @endphp
    <script type="application/ld+json">
        {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "url": "{{urldecode(request()->url())}}",
                "name": "@yield('title')",
                "description": "@yield('description')",
                "datePublished": "2023-05-10",
                "dateModified": "{{ $dateModified }}",
                "publisher": {
                    "@type": "Organization",
                    "name": "เซ้งบิช",
                    "logo": {
                    "@type": "ImageObject",
                    "url": "{{url('/')}}/assets/images/logo.webp",
                    "width": 96,
                    "height": 96
                    }
                }
            }
    </script>

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <!-- Required meta tags -->

    <link href="assets/plugins/aos/aos.min.css" rel="stylesheet">

    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{--
    <link href="assets/plugins/bootstrap/css/bootstrap.lite.min.css" rel="stylesheet"> --}}
    <link href="assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/plugins/OwlCarousel2/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/OwlCarousel2/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet">
    <link href="assets/plugins/ion.rangeSlider/ion.rangeSlider.min.css" rel="stylesheet">
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="assets/plugins/select2-bootstrap-5/select2-bootstrap-5-theme.min.css" rel="stylesheet">
    <!-- Custom style for this template -->
    <link href="assets/css/style.min.css" rel="stylesheet">
</head>

<body>

    <!-- start header -->
    <div class="bg-white sticky-top header">
        <!-- start navbar -->

        @include('layouts.partial.nav',['mainCategories' => $mainCategories])
        <!-- end /. navbar -->
        <!-- start header search bar  -->
        <form action="{{route('search')}}" method="GET">
            <div class="bg-white border-bottom border-top p-3 p-xl-0 search-bar">
                <div class="row g-3 g-xl-0">
                    <div class="col-md-2 col-lg-2 col-xl-3 d-none d-lg-block">
                        <!-- Start Search Select -->
                        <div class="search-select has-icon position-relative">
                            <select class="select2 form-select" name="province" aria-label="==จังหวัด==">
                                <option value="{{null}}" selected>==จังหวัด==</option>
                                @foreach ($provinces as $province)
                                <option value="{{$province->name}}">
                                    {{$province->name}} ({{$province->postInfos->count()}})</option>
                                @endforeach
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
                            <select class="select2 form-select" name="mainCategory" aria-label="==หมวดหมู่==">
                                <option value="{{null}}" selected>==หมวดหมู่==</option>
                                <option value="อสังหาริมทรัพย์">อสังหาริมทรัพย์</option>
                                <option value="ขายกิจการ">ขายกิจการ</option>
                                <option value="แฟรนไชส์">แฟรนไชส์</option>
                                <option value="พื้นที่ให้เช่า">พื้นที่ให้เช่า</option>
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
                    </div>
                    <div class="col-md-9 col-lg-5 col-xl-6">
                        <div class="search-select-input has-icon has-icon-y position-relative">
                            <!-- input -->
                            <input class="form-control" type="text" name="queryInput" placeholder="คำค้นหา ..."
                                value="{{ old('queryInput') }}">
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
                                <button type="submit" class="button btn-icon justify-content-center text-primary"
                                    data-bs-title="ค้นหา" aria-label="ค้นหา"
                                    style="border: none;background-color: rgba(0, 0, 0, 0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end /. header search bar  -->

        @yield('content')





    </div>
    {{-- @include('layouts.partial.footer') --}}


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
    <script src="assets/js/script.min.js"></script>

    @stack('scripts')
</body>


</html>