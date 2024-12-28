<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class StdController extends Controller
{
    public function stddashboard(){
        $eventdata = Event::all();
        return view('student_dashboard',compact("eventdata"));
    }
}
