<div class="row">
    <div id="availability">
        <form action="{{route('gethotel')}}" method="post">
            @csrf
            @livewire('search')
        <div class="a-col alternate">
            <div class="input-field">
                <label for="date-start">Check In</label>
                <input type="text" name="checkin" class="form-control" id="date-start" />
            </div>
        </div>
        <div class="a-col alternate">
            <div class="input-field">
                <label for="date-end">Check Out</label>
                <input type="text" name="checkout" class="form-control" id="date-end" />
            </div>
        </div>
            <div class="a-col alternate">
                <div class="input-field">
                    <label>Person</label>
                    <input type="number" max="4" min="0" name="person" class="form-control" />
                </div>
            </div>
        <div class="a-col action">
            <button type="submit" class="btn-primary">Reservation</button>
        </div>
        </form>
        @livewireScripts
    </div>
</div>
