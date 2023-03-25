@if ($paginator->onFirstPage())
    <li class="disabled"><span>&laquo;</span></li>
@else
    <li>
        <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
            <i class="fa fa-angle-double-left"></i>
        </a>
    </li>
@endif
@foreach ($elements as $element)
    @if (is_string($element))
        <li class="disabled"><span>{{ $element }}</span></li>
    @endif
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="active"><a href="">{{ $page }}</a>
                @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach
    @endif
@endforeach
@if ($paginator->hasMorePages())
    <li>
        <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
            <i class="fa fa-angle-double-right"></i>
        </a>
    </li>
@else
    <li class="disabled"><span>&raquo;</span></li>
@endif
