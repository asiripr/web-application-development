<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuserController extends Controller
{
    public function auserdashboard(){
        return view('auser_dashboard');
    }
}
