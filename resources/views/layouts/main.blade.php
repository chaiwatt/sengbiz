<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>ประกาศฟรี เซ้ง/ขายกิจการ ขายอสังหาริมทรัพท์ | เซ้งกิจการ SengBiz</title>
    <meta name="description"
        content="ประกาศฟรี เซ้ง/ขายกิจการ ขายอสังหาริมทรัพท์ เซ้งกิจการ ขายกิจการ ขายคอนโด ขายบ้านเดี่ยว ขายทาว์นโฮม ขายตึกแถว/อาคารพาณิชย์ ขายที่ดิน ขายแฟรนไชส์">
    <meta name="keywords"
        content="'เซ้งกิจการ,ขายกิจการ,ขายคอนโด,ขายบ้านเดี่ยว,ขายทาว์นโฮม,ขายตึกแถว/อาคารพาณิชย์,ขายที่ดิน,ขายแฟรนไชส์,ให้เช่าที่,ฝากขาย,นายหน้าอสังหาริมทรัพย์">
    <meta name="theme-color" content="#FFFFFF">
    <link rel="canonical" href="{{urldecode(request()->url())}}" />
    <meta property="og:locale" content="th_TH" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ประกาศฟรี เซ้ง/ขายกิจการ ขายอสังหาริมทรัพท์ | เซ้งกิจการ SengBiz" />
    <meta property="og:description"
        content="ประกาศฟรี เซ้ง/ขายกิจการ ขายอสังหาริมทรัพท์ เซ้งกิจการ ขายกิจการ ขายคอนโด ขายบ้านเดี่ยว ขายทาว์นโฮม ขายตึกแถว/อาคารพาณิชย์ ขายที่ดิน ขายแฟรนไชส์" />
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
    {{--
    <link href="assets/plugins/bootstrap/css/bootstrap.lite.min.css" rel="stylesheet"> --}}

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
    <link href="assets/css/style.min.css" rel="stylesheet">
</head>

<body>


    <div class="bg-white sticky-top header">
        @include('layouts.partial.nav',['mainCategories' => $mainCategories])
        @include('layouts.partial.topsearchbar')
    </div>

    @yield('content')


    @include('layouts.partial.footer')

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
</body>


</html>