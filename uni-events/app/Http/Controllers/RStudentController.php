<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RStudentController extends Controller
{
    public function eventcreation(){
        return view('rstd_event_creation');
    }
}
