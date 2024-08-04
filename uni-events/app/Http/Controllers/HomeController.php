<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function about(){
        $authdata = Auth::user();
        return view('about',compact("authdata"));
    }
    public function home(){
        $authdata = Auth::user();
        $eventdata = Event::all();
        return view('home',compact("authdata","eventdata"));
    }
    public function eventlist(){
        $authdata = Auth::user();
        return view('eventlist',compact("authdata"));
    }
}
