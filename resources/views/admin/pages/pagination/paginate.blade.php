@if ($paginator->hasPages())
    <nav>
        <ul class="mb-1 ml-2 pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li> --}}
                <li class="page-item prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" href="javascript:void(0);" aria-hidden="true">Prev</a>
                </li>
            @else
                {{-- <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li> --}}
                <li class="page-item prev">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Prev</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    {{-- <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li> --}}
                    <li class="page-item disabled" aria-disabled="true"><a class="page-link" href="javascript:void(0);">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
                            <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0);">{{ $page }}</a></li>
                        @else
                            {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                {{-- <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li> --}}
                <li class="page-item next">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                </li>
            @else
                {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li> --}}
                <li class="page-item next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link" href="javascript:void(0);" aria-hidden="true">Next</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
