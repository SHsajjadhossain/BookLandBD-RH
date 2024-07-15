
@if ($paginator->hasPages())

<nav aria-label="Page navigation example">
    <ul class="mt-2 mb-2 ml-2 pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"><a class="page-link" href="javascript:void(0);" aria-hidden="true">Prev</a></li>
        </li>
        @else
        <li>
            <li class="page-item prev" aria-disabled="true" aria-label="@lang('pagination.previous')"><a class="page-link"
                    href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-hidden="true">Prev</a></li>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><a class="page-link" href="javascript:void(0);">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0);">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li>
            <li class="page-item next"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a></li>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">><a class="page-link" href="javascript:void(0);" aria-hidden="true">Next</a></li>
        @endif

    </ul>
</nav>

@endif
