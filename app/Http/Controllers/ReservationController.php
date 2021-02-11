<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::where('user_id', Auth::id())->get();

        return view('home.user_reservation', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = Hotel::find($id);
        return view('home.reservation_add', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Get credit card info sen to bank webservice if everything is OK, next.
        $data = new Reservation;
        $data->user_id = Auth::id();
        $data->hotel_id = $request->input('hotel_id');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->check_in = $request->input('checkin');
        $data->check_out = $request->input('checkout');
        $data->room_id = $request->input('room_id');
        $data->days = $request->input('days');
        $data->total = $request->input('total');
        $data->status = "New";
        $data->IP = $_SERVER['REMOTE_ADDR'];

        $data->save();

        $datalist = Hotel::where('id', $data->hotel_id)->get();
        foreach ($datalist as $rs)
        {
            $data2 = new Room;
            $data2->id = $data->room_id;
            $data2->hotel_id = $rs->id;
            $data2->title = $rs->title;
            $data2->description = $rs->description;
            $data2->image = $rs->image;
            $data2->price = $rs->price;
            $data2->amount = 1;
            $data2->status = $data->status;
            $data2->save();
        }
        return redirect()->route('user_reservations')->with('success', 'Hotel Reserved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room, $id)
    {
        $datalist = Reservation::where('user_id', Auth::id())->where('hotel_id', $id)->get();

        return view('home.user_reservation', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
