<div class="a-col alternate">
    <input wire:model="search" name="search" type="text" class="input sb-search-input" list="mylist" placeholder="Search Hotel"/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option name="hotel_id" value="{{$rs->title}}">{{$rs->category->title}} </option>
                <input type="text" id="searchText" value="{{$rs->id}}">
            @endforeach
        </datalist>
    @endif
</div>
