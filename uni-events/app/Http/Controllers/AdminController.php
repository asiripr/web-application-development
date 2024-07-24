<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function eventcreation(){
        return view('admin_event_creation');
    }
}
