<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function eventcreation(){
        return view('admin_event_creation');
    }
    public function updateuser($id){
        $data = user::find($id);
        return view("admin_updateuser",compact("data"));
    }

    public function updateauser(Request $request, $id){
        $data = user::find($id);
   
        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();

        return redirect()->back();
    }
}
