@if ($paginator->hasPages())
    <nav>
        <ul class="pagination pager">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled pager__prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <svg class="icon icon-arrow">
                        <use xlink:href="#icon-arrow"></use>
                    </svg>
                    {{--<span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
                </li>
            @else
                <li class="page-item pager__prev">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <svg class="icon icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item pager__next">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">
                        <svg class="icon icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </span>
                    </a>
                </li>
            @else
                <li class="page-item disabled pager__next" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">
                        <svg class="icon icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif

<style>
    .page-item.active {
        color: #766045;
    }

    .page-link {
        padding: 10px;
        font-size: 18px;
    }
</style>
