@if (count($breadcrumbs))
    <div id="breadCrumb">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div>
                        <ul class="list-inline text-capitalize d-flex align-items-center p-0" id="breadCrumbList">
                            @foreach ($breadcrumbs as $breadcrumb)
                                @if ($breadcrumb->title == 'Home')
                                    <li class="list-inline-item" id="beadCrumbHome">
                                        <a href="{{route('index')}}">
                                            <i class="fa fa-home fa-lg"></i>
                                        </a>
                                    </li>
                                @elseif($breadcrumb->url && !$loop->last)
                                    <li class="list-inline-item" id="beadCrumbPage"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                                @else
                                    <li class="list-inline-item" id="beadCrumbPage"><a>{{ $breadcrumb->title }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif