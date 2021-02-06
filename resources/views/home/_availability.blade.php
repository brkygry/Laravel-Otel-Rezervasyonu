<div class="row">
    <div id="availability">
        <form action="{{route('gethotel')}}" method="post">
            @csrf
            @livewire('search')
        <div class="a-col alternate">
            <div class="input-field">
                <label for="date-start">Check In</label>
                <input type="text" class="form-control" id="date-start" />
            </div>
        </div>
        <div class="a-col alternate">
            <div class="input-field">
                <label for="date-end">Check Out</label>
                <input type="text" class="form-control" id="date-end" />
            </div>
        </div>
        <div class="a-col action">
            <a href="{{route('gethotel')}}">
{{--                {{route('gethotel', ['id'=>$rs->id, 'slug'=> $rs->slug])}}--}}
                <span>Check</span>
                Availability
            </a>
        </div>
    </form>
        @livewireScripts
    </div>
</div>
