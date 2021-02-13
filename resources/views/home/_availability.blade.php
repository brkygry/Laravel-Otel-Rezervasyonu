<div class="row">
    <div id="availability">
        <form action="{{route('user_reservation_add')}}" method="post">
            @csrf
        <div class="a-col alternate">
            @livewire('search')
        </div>
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
                    <input type="number" max="4" min="0" name="person" width="48" height="48" class="form-control" />
                </div>
            </div>
        <div class="a-col action">
            <button type="submit" class="btn-primary">Reservation</button>
        </div>
        </form>
        @livewireScripts
    </div>
</div>
