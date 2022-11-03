@if ($paginator->hasPages())
<nav class="pagination is-rounded " role="navigation" aria-label="pagination">
    <ul class="pagination-list">
        @if ($paginator->onFirstPage())
            <li>
            <a class="pagination-previous">Previous</a>
            </li>
        @else
            <li ><a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
        @endif
      
        @foreach ($elements as $element)
            @if (is_string($element))
                <li>{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <a class="pagination-link is-current">{{ $page }}</a>
                        </li>
                    @else
                        <li>
                            <a class="pagination-link " href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li>
                <a class="pagination-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            </li>
        @else
            <li >
                <a class="pagination-link" href="#">Next</a>
            </li>
        @endif
    </ul>
@endif