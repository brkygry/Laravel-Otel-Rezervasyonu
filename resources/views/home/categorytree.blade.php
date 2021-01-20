@foreach($children as $subcategory)
    <ul class="fh5co-sub-menu">
        @if(count($subcategory->children))
            <li><a href="#">{{$subcategory->title}}</a></li>
            <ul>
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
         @else
            <li><a href="#">{{$subcategory->title}}</a></li>
        @endif
    </ul>

@endforeach
