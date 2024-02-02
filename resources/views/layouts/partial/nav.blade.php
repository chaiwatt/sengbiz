<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" aria-label="navbar-brand">
            <img src="{{asset('assets/images/logo.webp')}}" alt="logo" decoding="async">
        </a>
        <div class="d-flex order-lg-2">
            <a href="{{route('home')}}" class="btn btn-primary d-none d-sm-flex fw-medium gap-2 hstack rounded-5"
                aria-label="ประกาศฟรี">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <div class="vr d-none d-sm-inline-block"></div>
                <span class="d-none d-sm-inline-block">ประกาศฟรี</span>
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

                @foreach ($mainCategories as $mainCategory)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="typcn typcn-weather-stormy top-menu-icon"></i>{{$mainCategory->name}}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($mainCategory->subCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{ route('search', ['subCategory' => $subCategory->name]) }}">{{$subCategory->name}}
                                ({{$subCategory->posts->count()}})</a>
                            @if ($subCategory->subMinorCategories->count() != 0)
                            <ul class="dropdown-menu">
                                @foreach ($subCategory->subMinorCategories as $subMinorCategory)
                                <li><a class="dropdown-item"
                                        href="{{ route('search', ['subMinorCategory' => $subMinorCategory->name]) }}">{{$subMinorCategory->name}}
                                        ({{$subMinorCategory->posts->count()}})</a>
                                    @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i
                            class="typcn typcn-weather-stormy top-menu-icon"></i>{{$mainCategories->where('id',5)->first()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($mainCategories->where('id',5)->first()->subCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{ route('search', ['subCategory' => $subCategory->name]) }}">{{$subCategory->name}}
                                ({{$subCategory->posts->count()}})</a>

                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle material-ripple" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        {{$mainCategories->where('id',1)->first()->name}}
                    </a>

                    <ul class="dropdown-menu">
                        @foreach ($mainCategories->where('id',1)->first()->subCategories as $subCategory)
                        <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">{{$subCategory->name}}
                                ({{$subCategory->posts->count()}})</a>
                            <ul class="dropdown-menu">
                                @foreach ($subCategory->subMinorCategories as $subMinorCategory)
                                <li><a class="dropdown-item"
                                        href="{{ route('search', ['subMinorCategory' => $subMinorCategory->name]) }}">{{$subMinorCategory->name}}
                                        ({{$subMinorCategory->posts->count()}})</a>
                                    @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle material-ripple" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i
                            class="typcn typcn-weather-stormy top-menu-icon"></i>{{$mainCategories->where('id',4)->first()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($mainCategories->where('id',4)->first()->subCategories as $subCategory)

                        <li><a class="dropdown-item"
                                href="{{ route('search', ['subCategory' => $subCategory->name]) }}">{{$subCategory->name}}
                                ({{$subCategory->posts->count()}})</a></li>
                        @endforeach

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle material-ripple" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i
                            class="typcn typcn-weather-stormy top-menu-icon"></i>{{$mainCategories->where('id',2)->first()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($mainCategories->where('id',2)->first()->subCategories as $subCategory)

                        <li><a class="dropdown-item"
                                href="{{ route('search', ['subCategory' => $subCategory->name]) }}">{{$subCategory->name}}
                                ({{$subCategory->posts->count()}})</a></li>
                        @endforeach

                    </ul>
                </li>
                <li class="nav-item">
                    @if (!Auth::check())
                    <a class="nav-link" href="{{route('login')}}">เข้าสู่ระบบ</a>
                    @else
                    <a class="nav-link" href="{{route('home')}}">แดชบอร์ด</a>


                    @endif
                </li>
            </ul>
            <div class="d-sm-none">
                <a href="{{route('home')}}" class="btn btn-primary d-flex gap-2 hstack justify-content-center rounded-3"
                    aria-label="ประกาศฟรี">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    <div class="vr d-none d-sm-inline-block"></div>
                    <span>ประกาศฟรี</span>
                </a>
            </div>
        </div>
    </div>
</nav>