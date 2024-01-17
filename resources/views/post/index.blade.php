@extends('layouts.landing')
@section('content')

<div class="col-xl-9 ps-lg-4 ps-xl-5 sidebar">

    @foreach ($posts as $post)
    <div class="card border-0 shadow-sm overflow-hidden rounded-4 mb-4 card-hover">
        <a href="{{route('view',['slug' => $post->slug])}}" class="stretched-link" aria-label="{{$post->title}}"></a>
        <div class="card-body p-0">

            <div class="g-0 row">
                <div class="bg-white col-lg-5 col-md-5 col-xl-4 position-relative">
                    <div class="card-image-hover dark-overlay h-100 overflow-hidden position-relative">
                        <!-- start image -->
                        {{-- --}}

                        @if ($post->postImages->first() && $post->postImages->first()->path !== null)
                        <img src="{{ asset($post->postImages->first()->path) }}" alt="{{$post->title}}"
                            class="h-100 w-100 object-fit-cover" style="max-height: 200px !important" decoding="async">
                        @else
                        <img src="{{ asset('assets/images/no-image/no-image-' . rand(1, 2) . '.webp') }}"
                            class="h-100 w-100 object-fit-cover" style="max-height: 200px !important"
                            alt="{{$post->title}}" decoding="async">
                        @endif

                        <!-- end /. image -->

                        @if (@$post->subCategory->name !== null)
                        <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                            <a href="#aa" aria-label="{{$post->subCategory->name}}">{{$post->subCategory->name}}</a>
                        </div>
                        @endif

                        @if (@$post->postInfo->province->name !== null)
                        <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2">
                            <a href="#bb"
                                aria-label="{{$post->postInfo->province->name}}">{{$post->postInfo->province->name}}</a>
                        </div>
                        @endif


                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-xl-8 p-3 p-lg-4 p-md-3 p-sm-4">
                    <div class="d-flex flex-column h-100">
                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                            <!-- start ratings -->
                            <i class="fa-solid fa-eye"></i>
                            <!-- end /. ratings -->
                            <!-- start rating counter text -->
                            <span class="fw-medium text-primary">จำนวนดู - ครั้ง {{$post->id}}</span>
                            <!-- end /. rating counter text -->
                        </div>
                        <!-- start card title -->
                        <h4 class="fs-18 fw-semibold mb-0">
                            {{$post->title}}

                        </h4>
                        <!-- end /. card title -->
                        <!-- start card description -->
                        <p class="mt-3 fs-15">{{$post->description}}
                        </p>
                        <!-- end /. card description -->
                        <!-- start contact content -->
                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                aria-label="{{$post->PostDate}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b"
                                    class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                </svg>
                                <span>{{$post->PostDate}}</span>
                            </a>
                            <div href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                <span>
                                    @if (@$post->postInfo->amphur->name !== null)
                                    <a href=""
                                        aria-label="{{$post->postInfo->amphur->name}}">{{$post->postInfo->amphur->name}}</a>,
                                    @endif
                                    @if (@$post->postInfo->province->name !== null)
                                    <a href=""
                                        aria-label="{{$post->postInfo->province->name}}">{{$post->postInfo->province->name}}</a></span>
                                @endif

                            </div>
                            @if ($post->mainCategory->name !== null)
                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                aria-label="{{$post->mainCategory->name}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b"
                                    class="bi bi-tags" viewBox="0 0 16 16">
                                    <path
                                        d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                    <path
                                        d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                </svg>
                                <span>{{$post->mainCategory->name}}</span>
                            </a>
                            @endif

                            @if ($post->postNearPlace !== null)
                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                aria-label="{{$post->postNearPlace->name}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b"
                                    class="bi bi-train-lightrail-front" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 0a.5.5 0 0 0 0 1h1v1.011c-1.525.064-3.346.394-4.588.655C1.775 2.904 1 3.915 1 5.055V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V5.055c0-1.14-.775-2.15-1.912-2.39-1.242-.26-3.063-.59-4.588-.654V1h1a.5.5 0 0 0 0-1zM8 3c1.497 0 3.505.356 4.883.644.653.137 1.117.722 1.117 1.411V13.5a1.5 1.5 0 0 1-1.072 1.438 75.999 75.999 0 0 1-.1-.792c-.092-.761-.2-1.752-.266-2.682A21.26 21.26 0 0 1 12.5 10c0-1.051.143-2.404.278-3.435.024-.187.048-.362.07-.522.112-.798-.42-1.571-1.244-1.697C10.644 4.199 9.136 4 8 4c-1.136 0-2.645.2-3.604.346-.825.126-1.356.9-1.244 1.697.022.16.046.335.07.522C3.357 7.596 3.5 8.949 3.5 10c0 .428-.024.933-.062 1.464a57.32 57.32 0 0 1-.266 2.682c-.038.31-.072.58-.1.792A1.5 1.5 0 0 1 2 13.5V5.055c0-.69.464-1.274 1.117-1.41C4.495 3.354 6.503 3 8 3m3.835 11.266c.034.28.066.53.093.734H4.072a62.692 62.692 0 0 0 .328-3h2.246c.36 0 .704-.143.958-.396a.353.353 0 0 1 .25-.104h.292a.35.35 0 0 1 .25.104c.254.253.599.396.958.396H11.6c.068.808.158 1.621.236 2.266ZM6 13.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m3.5.5a.5.5 0 0 0 .5-.5.5.5 0 1 0 1 0 .5.5 0 0 0-1 0 .5.5 0 1 0-.5.5m-5.03-3c.019-.353.03-.692.03-1 0-.927-.104-2.051-.216-3h7.432c-.112.949-.216 2.073-.216 3 0 .308.011.647.03 1H9.354a.353.353 0 0 1-.25-.104 1.354 1.354 0 0 0-.958-.396h-.292c-.36 0-.704.143-.958.396a.353.353 0 0 1-.25.104zm-.315-5-.013-.096a.497.497 0 0 1 .405-.57C5.505 5.188 6.947 5 8 5s2.495.188 3.453.334a.497.497 0 0 1 .405.57L11.845 6z" />
                                </svg>
                                <span>{{$post->postNearPlace->name}}</span>
                            </a>
                            @endif
                            @if (intVal($post->need_broker) === 1)
                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold"
                                aria-label="รับนายหน้า">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b"
                                    class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                    <path
                                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                </svg>
                                <span>รับนายหน้า</span>
                            </a>
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
@endsection