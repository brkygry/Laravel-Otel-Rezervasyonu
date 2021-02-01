<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        return view('home.index', ['setting'=>$setting]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting'=>$setting]);
    }

    public function services()
    {
        return view('home.services');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function hotels()
    {
        return view('home.hotelbook');
    }

    public function blank()
    {
        return view('home._blank');
    }

    public function references()
    {
        return view('home.references');
    }













}
