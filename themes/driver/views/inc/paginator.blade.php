@if($paginator->hasPages())
<div class="clearfix">
    <ul class="pagination">
        @if($paginator->onFirstPage())
        @else
        <li class="page-item disabled"><a href="{{$paginator->previousPageUrl()}}" class="pagination-back pull-left"> {{__('web.Previous')}}  </a></li>
        @endif

        @foreach ($elements as $element)
        @if (is_array($element))
        @foreach ( $element as $page => $url)
        @if ($page == $paginator->currentpage())
        <li class="page-item active page-link">{{$page}}</a></li>
        @else
        <li class="page-item "><a href="{{$url}}" class="page-link">{{$page}}</a></li>

        @endif

        @endforeach

        @endif

        @endforeach

        @if($paginator->hasMorePages())
        <li class="page-item"><a href="{{$paginator->nextPageUrl()}}" class="page-link pagination-next pull-right" >{{__('web.Next')}}</a></li>
        @else
        @endif
    </ul>
</div>
@endif
