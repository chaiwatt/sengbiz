<aside class="col-xl-3 filters-col content pe-lg-4 pe-xl-5 shadow-end">

    <!-- start sidebar filters -->
    <div class="js-sidebar-filters-mobile">
        <!-- filter header -->
        <div
            class="bg-white border-bottom d-flex justify-content-between align-items-center p-3 sidebar-filters-header d-xl-none">
            <div class="align-items-center btn-icon d-flex filter-close justify-content-center rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                    viewBox="0 0 16 16">
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
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="5" name="categories[]" id="categoty-5">
                        <label class="form-check-label" for="categoty-5">อสังหาริมทรัพย์<span
                                class="count fs-13 ms-1 text-muted">({{$allPosts->where('main_category_id',5)->count()}})</span></label>
                    </div>
                    <!-- Start Form Check -->
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="1" name="categories[]" id="categoty-1">
                        <label class="form-check-label" for="categoty-1">ขายกิจการ<span
                                class="count fs-13 ms-1 text-muted">({{$allPosts->where('main_category_id',1)->count()}})</span></label>
                    </div>
                    <!-- End Form Check -->
                    <!-- Start Form Check -->

                    <!-- End Form Check -->

                    <!-- Start Form Check -->
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="4" name="categories[]" id="categoty-4">
                        <label class="form-check-label" for="categoty-4">แฟรนไชส์<span
                                class="count fs-13 ms-1 text-muted">({{$allPosts->where('main_category_id',4)->count()}})</span></label>
                    </div>
                    <!-- End Form Check -->
                    <!-- Start Form Check -->
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="3" name="categories[]" id="categoty-3">
                        <label class="form-check-label" for="categoty-3">รับฝากขาย<span
                                class="count fs-13 ms-1 text-muted">({{$allPosts->where('main_category_id',3)->count()}})</span></label>
                    </div>
                    <!-- End Form Check -->
                    <!-- Start Form Check -->
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="2" name="categories[]" id="categoty-2">
                        <label class="form-check-label" for="categoty-2">พื้นที่ให้เช่า<span
                                class="count fs-13 ms-1 text-muted">({{$allPosts->where('main_category_id',2)->count()}})</span></label>
                    </div>
                    <!-- End Form Check -->

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
            {{-- <a href="{{route('view',['slug' => $asidePost->slug])}}" class="stretched-link z-2"></a> --}}
            <!-- end /. card link -->
            <!-- start card image wrap -->
            <div class="card-img-wrap card-image-hover overflow-hidden">
                {{-- <img src="{{asset($asidePost->postImages->first()->path)}}" alt="" class="img-fluid"
                    style="width:100%"> --}}
                <a href="{{route('view',['slug' => $asidePost->slug])}}" class="stretched-link z-2"
                    aria-label="{{$asidePost->title}}">
                    @if ($asidePost->postImages->first() && $asidePost->postImages->first()->path !== null)
                    <img src="{{ asset($asidePost->postImages->first()->path) }}" alt="" class="img-fluid"
                        style="width:100%">
                    @else
                    <img src="{{ asset('assets/images/no-image/no-image-' . rand(1, 2) . '.webp') }}" alt=""
                        class="img-fluid" style="width:100%">
                    @endif
                </a>

                @if (@$asidePost->postInfo->province->name !== null)
                <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                    <a href="{{ route('search', ['province' => $asidePost->postInfo->province->name]) }}"
                        aria-label="{{$asidePost->postInfo->province->name}}">{{$asidePost->postInfo->province->name}}</a>
                </div>
                @endif

                @if (@intVal($asidePost->price) !== 0)
                <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                    {{number_format($asidePost->price)}}
                </div>
                @endif

                @if (@intVal($asidePost->price) !== 0 && intVal($asidePost->is_ads) === 1)
                <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2"
                    style="margin-top:35px">
                    <div class="d-flex align-items-center text-primary rating-stars">
                        <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                        <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                        <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                        <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                        <i class="fa-star-icon" style="font-size: 10px;padding:0px"></i>
                    </div>
                </div>
                @endif

                <!-- end /. card image wrap -->
                <div class="bottom-0 d-flex flex-column p-4 position-absolute position-relative text-white w-80 z-1">
                    <a href="{{route('view',['slug' => $asidePost->slug])}}" aria-label="{{$asidePost->title}}">
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