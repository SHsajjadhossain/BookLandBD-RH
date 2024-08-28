@if ($paginator->hasPages())

<ul class="pagination-btns flex-center pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="page-item prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a href="javascript:void(0);" class="page-link single-btn prev-btn " aria-hidden="true">|<i class="zmdi zmdi-chevron-left"></i></a>
        </li>
    @else
        <li class="page-item prev">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link single-btn prev-btn " rel="prev" aria-label="@lang('pagination.previous')">|<i class="zmdi zmdi-chevron-left"></i></a>
        </li>
    @endif

    @if ($paginator->onFirstPage())
        <li class="page-item prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a class="page-link single-btn prev-btn " href="javascript:void(0);" aria-hidden="true"><i class="zmdi zmdi-chevron-left"></i></a>
        </li>
    @else
        <li class="page-item prev">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link single-btn prev-btn " rel="prev" aria-label="@lang('pagination.previous')"><i class="zmdi zmdi-chevron-left"></i> </a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="page-item disabled" aria-disabled="true"><a href="javascript:void(0);" class="page-link single-btn">{{ $element }}</a></li>
        @endif
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active" aria-current="page"><a class="page-link single-btn" href="javascript:void(0);">{{ $page }}</a></li>
                @else
                    <li class="page-item"><a class="page-link single-btn" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li class="page-item next">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link single-btn next-btn" rel="next" aria-label="@lang('pagination.next')"><i class="zmdi zmdi-chevron-right"></i></a>
        </li>
    @else
        <li class="page-item next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <a href="javascript:void(0);" class="page-link single-btn next-btn" aria-hidden="true"><i class="zmdi zmdi-chevron-right"></i></a>
        </li>
    @endif

    @if ($paginator->hasMorePages())
        <li class="page-item next">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link single-btn next-btn" rel="next" aria-label="@lang('pagination.next')"><i class="zmdi zmdi-chevron-right"></i>|</a>
        </li>
    @else
        <li class="page-item next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link single-btn next-btn" rel="next" aria-label="@lang('pagination.next')"><i class="zmdi zmdi-chevron-right"></i>|</a>
        </li>
    @endif

</ul>

@endif

