@foreach($children as $subcategory)
    <ul class="fh5co-sub-menu">
        @if(count($subcategory->children))
            <li><a href="{{route('categoryhotels', ['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
            <ul class="list">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
         @else
            <li><a href="{{route('categoryhotels', ['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
