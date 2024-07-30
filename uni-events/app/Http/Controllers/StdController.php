<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StdController extends Controller
{
    public function stddashboard(){
        return view('student_dashboard');
    }
}
