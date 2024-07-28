<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('about');
    }
    public function home(){
        return view('home');
    }
    public function index(){
        return view('admin_dashboard');
    }
}
