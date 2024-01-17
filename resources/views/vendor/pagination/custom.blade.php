@if ($paginator->hasPages())
<div class="pagination-area">
    @if ($paginator->onFirstPage())
    <a class="prev page-numbers" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
        </svg>
        ก่อนหน้า
    </a>
    @else
    <a class="prev page-numbers" href="{{$paginator->previousPageUrl()}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
        </svg>
        ก่อนหน้า
    </a>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)

    @if (is_array($element))
    @php
    $totalPages = $paginator->lastPage();
    @endphp

    @foreach ($element as $page => $url)
    @if ($page <= 5 || $page===$totalPages) @if ($page==$paginator->currentPage())
        <span class="page-numbers current">{{ $page }}</span>
        @else
        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
        @endif
        @elseif ($page == 6)
        <span class="page-numbers">...</span>
        @endif
        @endforeach
        @endif
        @endforeach


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

        <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">
            ถัดไป
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
            </svg>
        </a>
        @else

        <a class="next page-numbers" href="#">
            ถัดไป
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
            </svg>
        </a>
        @endif
</div>
@endif