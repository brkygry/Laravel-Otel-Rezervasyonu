<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\faq;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();;
    }

    public function  index()
    {
        $setting = Setting::first();
        $slider = Hotel::select('id', 'title', 'image', 'price', 'description', 'slug')->limit(3)->inRandomOrder()->get();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'
        ];
        $availability = Hotel::select('id', 'title', 'image', 'price', 'description', 'slug')->get();
        $adata=[
            'setting'=>$setting,
            'availability'=>$availability,
            'page'=>'home'
        ];
        return view('home.index', ['setting'=>$setting], $data, $adata);
    }

    public function hotel($id, $slug)
    {
        $data = Hotel::find($id);
        $datalist = Image::where('hotel_id', $id)->get();
        return view('home.hotel_detail', ['data'=>$data, 'datalist'=>$datalist]);
    }

    public function booknow($id)
    {
        echo "Book Now <br>";
        $data = Hotel::find($id);
        print_r($data);
        exit();
    }

    public function categoryhotels($id, $slug)
    {
        $datalist = Hotel::where('category_id', $id)->get();
        $data = Category::find($id);
        $slider = Hotel::select('id', 'title', 'image', 'price', 'description', 'slug')->limit(4)->get();
        $sliderdata=[
            'setting'=>$data,
            'slider'=>$slider,
            'page'=>'home'
        ];
        return view('home.category_hotels', ['data'=>$data, 'datalist'=>$datalist], $sliderdata);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting'=>$setting]);
    }

    public function faq()
    {
        $datalist = faq::all()->sortBy('position');
        return view('home.faq', ['datalist'=>$datalist]);
    }

    public function services()
    {
        return view('home.services');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success', 'Mesajınız gönderilmiştir. En kısa sürede geri dönüş yapacağız.');
    }

    public function hotels()
    {
        $setting = Setting::first();
        $slider = Hotel::select('id', 'title', 'image', 'price', 'description', 'slug')->get();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
        ];
        return view('home.hotelbook', ['setting'=>$setting], $data);
    }

    public function blank()
    {
        return view('home._blank');
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }

    public function gethotel(Request $request)
    {
        $data = Hotel::where('title', $request->input('search'))->first();
        return redirect()->route('hotel', ['id'=>$data->id, 'slug'=>$data->slug]);
    }
}
