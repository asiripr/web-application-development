<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function about(){
        return view('about');
    }
    public function home(){
        return view('home');
    }
    public function eventlist(){
        return view('eventlist');
    }
    public function index(){
        $data = user::all();
        return view('admin_dashboard',compact("data"));
    }
}
