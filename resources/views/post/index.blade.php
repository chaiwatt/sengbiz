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
                        <form action="{{route('search')}}" method="GET">
                            <div class="mb-4">
                                <div class="mb-3">
                                    <h4 class="fs-5 fw-semibold mb-2">หมวดหมู่</h4>
                                    <p class="mb-0 small">เลือกหมวดหมู่ค้นหา</p>
                                </div>

                                @foreach($mainCategories as $key => $mainCategory)

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="{{$key+1}}"
                                        name="categories[]" id="categoty-{{$key+1}}">
                                    <label class="form-check-label"
                                        for="categoty-{{$key+1}}">{{$mainCategory->name}}<span
                                            class="count fs-13 ms-1 text-muted">({{$mainCategory->posts_count}})</span></label>
                                </div>
                                @endforeach
                            </div>
                            <div class="mb-4">
                                <!-- Start Select2 -->
                                <select class="form-select" name="province" aria-label="ล่าสุด">
                                    <option value="{{null}}">==จังหวัด==</option>
                                    @foreach ($provinces as $province)
                                    <option value="{{$province->name}}">
                                        {{$province->name}} ({{$province->postInfos->count()}})</option>
                                    @endforeach
                                </select>
                                <!-- /.End Select2 -->
                            </div>
                            <div class="mb-4 border-bottom pb-4">
                                <!-- Start Select2 -->
                                <select class="form-select" name="price" aria-label="ล่าสุด">
                                    <option value="{{null}}">==ช่วงราคา==</option>
                                    @foreach ($priceRanges as $priceRange)
                                    <option value="{{$priceRange->id}}">{{$priceRange->name}}</option>
                                    @endforeach
                                </select>
                                <!-- /.End Select2 -->
                            </div>
                            <!-- start apply button -->
                            <button type="submit" class="btn btn-primary w-100">ค้นหา</button>
                        </form>
                    </div>
                </div>
                @foreach ($asidePosts as $asidePost)
                <!-- end /. sidebar filters -->
                <div class="owl-item mt-3 active" style="width: 100%; margin-right: 10px;">
                    <div class="card rounded-3 w-100 flex-fill overflow-hidden border-0 dark-overlay">
                        <!-- start card link -->
                        {{-- <a href="{{route('view',['slug' => $asidePost->slug])}}" class="stretched-link z-2"></a>
                        --}}
                        <!-- end /. card link -->
                        <!-- start card image wrap -->
                        <div class="card-img-wrap card-image-hover overflow-hidden">
                            {{-- <img src="{{asset($asidePost->postImages->first()->path)}}" alt="" class="img-fluid"
                                style="width:100%"> --}}
                            <a href="{{route('view',['slug' => $asidePost->slug])}}" class="stretched-link z-2"
                                aria-label="{{$asidePost->title}}">
                                @if ($asidePost->thumb_nail !== null)
                                <img src="{{ asset($asidePost->thumb_nail) }}" class="h-100 w-100 object-fit-cover"
                                    alt="" class="img-fluid" style="width:100%">
                                @else
                                <img src="{{ asset('images/sengbiz-thumbnail.webp') }}"
                                    class="h-100 w-100 object-fit-cover" alt="" class="img-fluid" style="width:100%">
                                @endif
                            </a>

                            @if (intVal($asidePost->is_ads) === 1)
                            <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                <div class="d-flex align-items-center text-primary rating-stars">
                                    <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                                    <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                                    <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                                    <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                                    <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                                </div>
                            </div>
                            @endif

                            @if (@$asidePost->postInfo->province->name !== null)
                            <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                <a href="{{ route('search', ['province' => $asidePost->postInfo->province->name]) }}"
                                    aria-label="{{$asidePost->postInfo->province->name}}">{{$asidePost->postInfo->province->name}}</a>
                            </div>
                            @endif

                            @if (@intVal($asidePost->price) !== 0)
                            <div @if (intVal($asidePost->is_ads) === 1)
                                style = "margin-top:40px"
                                @endif class="bg-blur card-badge d-inline-block position-absolute start-0 text-white
                                z-2" >
                                {{number_format($asidePost->price)}}
                            </div>
                            @endif



                            <!-- end /. card image wrap -->
                            <div
                                class="bottom-0 d-flex flex-column p-4 position-absolute position-relative text-white w-80 z-1">
                                <a href="{{route('view',['slug' => $asidePost->slug])}}"
                                    aria-label="{{$asidePost->title}}">
                                    <h3 class="fs-6 fw-semibold mb-0">{{$asidePost->title}}</h3>
                                </a>
                                <!-- start card title -->

                                <!-- end /. card title -->
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </aside>


            <div class="col-xl-9 ps-lg-4 ps-xl-5 sidebar">

                @foreach ($posts as $post)
                <div class="card border-0 shadow-sm overflow-hidden rounded-4 mb-4 card-hover">
                    {{-- <a href="{{route('view',['slug' => $post->slug])}}" class="stretched-link"
                        aria-label="stretched-link"></a>
                    --}}
                    <div class="card-body p-0">

                        <div class="g-0 row">
                            <div class="bg-white col-lg-5 col-md-5 col-xl-4 position-relative">
                                <div class="card-image-hover dark-overlay h-100 overflow-hidden position-relative">
                                    <!-- start image -->
                                    {{-- --}}
                                    <a href="{{route('view',['slug' => $post->slug])}}" class="stretched-link"
                                        aria-label="{{$post->title}}">
                                        @if ($post->thumb_nail !== null)
                                        <img src="{{ asset($post->thumb_nail) }}" alt="{{$post->title}}"
                                            class="h-100 w-100 object-fit-cover" style="max-height: 200px !important"
                                            decoding="async">
                                        @else
                                        <img src="{{ asset('images/sengbiz-thumbnail.webp') }}"
                                            class="h-100 w-100 object-fit-cover" style="max-height: 200px !important"
                                            alt="{{$post->title}}" decoding="async">
                                        @endif
                                    </a>
                                    <!-- end /. image -->

                                    @if (@$post->subCategory->name !== null)
                                    <div
                                        class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                        <a href="{{ route('search', ['subCategory' => $post->subCategory->name]) }}"
                                            aria-label="{{$post->subCategory->name}}">{{$post->subCategory->name}}</a>
                                    </div>
                                    @endif

                                    @if (@$post->postInfo->province->name !== null)
                                    <div
                                        class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                                        <a href="{{ route('search', ['province' => $post->postInfo->province->name]) }}"
                                            aria-label="{{$post->postInfo->province->name}}">{{$post->postInfo->province->name}}</a>
                                    </div>
                                    @endif

                                    @if (@intVal($post->price) !== 0)
                                    <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-3"
                                        style="margin-top: 35px">
                                        {{number_format($post->price)}}
                                    </div>
                                    @endif


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
                                        <span class="fw-medium text-primary">จำนวนดู {{
                                            isset($post->postView->view)
                                            ?
                                            $post->postView->view : '-' }} ครั้ง</span>

                                        @if ($post->postBookMarks->count() != 0)
                                        <span class="text-primary"><i class="fa-solid fa-heart text-primary"
                                                style="margin-left: 20px"></i><span
                                                style="margin-left: 5px">{{$post->postBookMarks->count()}}
                                                บุคมาร์ค</span> </span>
                                        @endif
                                        @if ($post->contactMessages->count() != 0)
                                        <span class="text-primary"><i class="fa-regular fa-gem text-primary"
                                                style="margin-left: 20px"></i><span
                                                style="margin-left: 5px">{{$post->contactMessages->count()}}
                                                คำขอ</span> </span>
                                        @endif


                                        <!-- end /. rating counter text -->

                                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                            <a href="#"
                                                class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="บุคมาร์ค" aria-label="{{$post->title}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                        {{-- <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                            <a href="#"
                                                class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="บุคมาร์ค" aria-label="{{$post->title}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div> --}}


                                    </div>
                                    <!-- start card title -->
                                    <h4 class="fs-18 fw-semibold mb-0">
                                        <a href="{{route('view',['slug' => $post->slug])}}"
                                            aria-label="{{$post->title}}">
                                            {{$post->title}}
                                        </a>
                                    </h4>
                                    <!-- end /. card title -->
                                    <!-- start card description -->
                                    <p class="mt-3 fs-15">
                                        <a href="{{route('view',['slug' => $post->slug])}}"
                                            aria-label="{{$post->description}}">
                                            {{$post->description}}
                                        </a>

                                    </p>
                                    <!-- end /. card description -->
                                    <!-- start contact content -->
                                    <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                        <span class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                            aria-label="{{$post->PostDate}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#9b9b9b" class="bi bi-clock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                            </svg>
                                            <span>{{$post->PostDate}}</span>
                                        </span>
                                        <div href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#9b9b9b" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                                <path
                                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                            </svg>
                                            <span>
                                                @if (@$post->postInfo->amphur->name !== null)
                                                <a href="{{ route('search', ['amphur' => $post->postInfo->amphur->name]) }}"
                                                    aria-label="{{$post->postInfo->amphur->name}}">{{$post->postInfo->amphur->name}}</a>,
                                                @endif
                                                @if (@$post->postInfo->province->name !== null)
                                                <a href="{{ route('search', ['province' => $post->postInfo->province->name]) }}"
                                                    aria-label="{{$post->postInfo->province->name}}">{{$post->postInfo->province->name}}</a></span>
                                            @endif

                                        </div>
                                        @if ($post->mainCategory->name !== null)
                                        <span class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                            aria-label="{{$post->mainCategory->name}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#9b9b9b" class="bi bi-tags" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                <path
                                                    d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                            </svg>
                                            <span>
                                                @if (@$post->subCategory->name !== null)
                                                <a href="{{ route('search', ['subCategory' => $post->subCategory->name]) }}"
                                                    aria-label="{{$post->subCategory->name}}">{{$post->subCategory->name}}</a>,
                                                @endif
                                                <a href="{{ route('search', ['mainCategory' => $post->mainCategory->name]) }}"
                                                    aria-label="{{$post->mainCategory->name}}">{{$post->mainCategory->name}}</a></span>
                                        </span>
                                        @endif

                                        @if ($post->postNearPlace !== null)
                                        <a href="{{ route('search', ['nearPlace' => $post->postNearPlace->name]) }}"
                                            class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                            aria-label="{{$post->postNearPlace->name}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#9b9b9b" class="bi bi-train-lightrail-front" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 0a.5.5 0 0 0 0 1h1v1.011c-1.525.064-3.346.394-4.588.655C1.775 2.904 1 3.915 1 5.055V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V5.055c0-1.14-.775-2.15-1.912-2.39-1.242-.26-3.063-.59-4.588-.654V1h1a.5.5 0 0 0 0-1zM8 3c1.497 0 3.505.356 4.883.644.653.137 1.117.722 1.117 1.411V13.5a1.5 1.5 0 0 1-1.072 1.438 75.999 75.999 0 0 1-.1-.792c-.092-.761-.2-1.752-.266-2.682A21.26 21.26 0 0 1 12.5 10c0-1.051.143-2.404.278-3.435.024-.187.048-.362.07-.522.112-.798-.42-1.571-1.244-1.697C10.644 4.199 9.136 4 8 4c-1.136 0-2.645.2-3.604.346-.825.126-1.356.9-1.244 1.697.022.16.046.335.07.522C3.357 7.596 3.5 8.949 3.5 10c0 .428-.024.933-.062 1.464a57.32 57.32 0 0 1-.266 2.682c-.038.31-.072.58-.1.792A1.5 1.5 0 0 1 2 13.5V5.055c0-.69.464-1.274 1.117-1.41C4.495 3.354 6.503 3 8 3m3.835 11.266c.034.28.066.53.093.734H4.072a62.692 62.692 0 0 0 .328-3h2.246c.36 0 .704-.143.958-.396a.353.353 0 0 1 .25-.104h.292a.35.35 0 0 1 .25.104c.254.253.599.396.958.396H11.6c.068.808.158 1.621.236 2.266ZM6 13.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m3.5.5a.5.5 0 0 0 .5-.5.5.5 0 1 0 1 0 .5.5 0 0 0-1 0 .5.5 0 1 0-.5.5m-5.03-3c.019-.353.03-.692.03-1 0-.927-.104-2.051-.216-3h7.432c-.112.949-.216 2.073-.216 3 0 .308.011.647.03 1H9.354a.353.353 0 0 1-.25-.104 1.354 1.354 0 0 0-.958-.396h-.292c-.36 0-.704.143-.958.396a.353.353 0 0 1-.25.104zm-.315-5-.013-.096a.497.497 0 0 1 .405-.57C5.505 5.188 6.947 5 8 5s2.495.188 3.453.334a.497.497 0 0 1 .405.57L11.845 6z" />
                                            </svg>
                                            <span>{{$post->postNearPlace->name}}</span>
                                        </a>
                                        @endif
                                        @if (intVal($post->need_broker) === 2)
                                        <span class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                            aria-label="รับนายหน้า">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#9b9b9b" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                <path
                                                    d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                            </svg>
                                            <span>รับนายหน้า ({{$post->percent}}%)</span>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- end contact content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



                <!-- start pagination -->
                <nav class="justify-content-center mt-5 pagination align-items-center">
                    {{$posts->links('vendor.pagination.custom')}}
                </nav>
                <!-- end /. pagination -->
            </div>
        </div>
    </div>
</div>

@endsection