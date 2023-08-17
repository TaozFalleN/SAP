@if ($paginator->hasPages())
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    @if (!$paginator->onFirstPage())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
        </li>
    @endif
    
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="page-item"><a class="page-link">...</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="page-item active">
                    <a class="page-link">{{ $page }}<span class="sr-only">(current)</span></a>
                </li>
                @else
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </li>
    @endif
    
  </ul>
</nav>
@endif


