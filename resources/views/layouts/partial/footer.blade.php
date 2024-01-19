<footer class="footer-dark main-footer overflow-hidden position-relative pt-5">
    <div class="container border-top">
        <div class="align-items-center g-3 py-4 row">
            <div class="col-lg-auto">
                <!-- start footer nav -->
                <ul class="list-unstyled list-separator mb-2 footer-nav">
                    <li class="list-inline-item"><a href="{{route('/')}}">นโยบายความเป็นส่วนตัว</a></li>
                    <li class="list-inline-item"><a href="{{route('sitemap')}}">แผนผังเว็บไซต์</a></li>
                    <li class="list-inline-item"><a href="{{route('/')}}">คุ้กกี้</a></li>
                </ul>
                <!-- end /. footer nav -->
            </div>
            <div class="col-lg order-md-first">
                <div class="align-items-center row">
                    <!-- start footer logo -->
                    <a href="{{url('/')}}" class="col-sm-auto footer-logo mb-2 mb-sm-0" aria-label="logo">
                        <img src="assets/images/logo-white.webp" alt="logo" decoding="async">
                    </a>
                    <!-- end /. footer logo -->
                    <!-- start text -->
                    <div class="col-sm-auto copy">© 2023 - {{ now()->format('Y') }} เซ้งกิจการ | SengBiz - All Rights
                        Reserved</div>
                    <!-- end /. text -->
                </div>
            </div>
        </div>
    </div>
</footer>