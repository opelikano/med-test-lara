@if ($paginator->hasPages())
    <ul class="pagination">
        @if (!$paginator->onFirstPage())
            <li>
                <a href="{{ $paginator->url(1) }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;&lsaquo;</a>
            </li>
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        <li class="disabled" aria-disabled="true" style="padding: 7px 10px 0 10px;">
            <span>{{ $paginator->currentPage() }} із {{ $paginator->lastPage() }}</span>
        </li>

        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
            <li>
                <a href="{{ $paginator->url($paginator->lastPage()) }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;&rsaquo;</a>
            </li>
        @endif
    </ul>
@endif
