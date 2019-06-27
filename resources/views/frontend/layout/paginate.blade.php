@if(!isset($request['alias']) || $request['alias'] == 'ALL')
<nav aria-label="Page navigation example" class="d-md-block d-none">
    <ul class="pagination justify-content-center">
        @if ($blogs->onFirstPage())
        <li class="page-item disabled" >
            <a class="page-link" href="javascript:void(0)" tabindex="-1"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </li>
        @else
            <li><a class="page-link" href="{{ $blogs->previousPageUrl() }}" tabindex="-1"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
        @endif
        @for ($i = 1; $i<=$blogs->lastPage() ; $i++)
            <li class="page-item"><a class="page-link page-littile @if($blogs->currentPage() == $i) active @endif" href="{{ $blogs->url($i) }}">{{$i}}</a></li>
        @endfor
        @if ($blogs->hasMorePages())
            <li class="page-item" >
                <a class="page-link" href="{{ $blogs->nextPageUrl() }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)" tabindex="-1"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
        @endif
    </ul>
</nav>
@endif