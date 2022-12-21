


@foreach($children as $subcategory)
    <ul class="navbar-nav py-lg-2 mx-auto">
        @if(count($subcategory->children))
            <li class="nav-item me-lg-4 dropdown position-static">{{$subcategory->title}}</li>
            <ul class="list-unstyled">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a class="dropdown-item" href="#">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach

