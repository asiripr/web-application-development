<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AuserController extends Controller
{
    public function auserdashboard(){
        $eventdata = Event::all();
        return view('auser_dashboard',compact("eventdata"));
    }
}
