<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admindashboard(){
        $authdata = Auth::user();
        $data = user::all();
        return view('admin_dashboard',compact("data","authdata"));
    }
    public function updateuser($id){
        $authdata = Auth::user();        
        $data = user::find($id);
        return view("admin_updateuser",compact("data","authdata"));
    }

    public function deleteuser($id){
        $authdata = Auth::user();
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateauser(Request $request, $id){
        $authdata = Auth::user();
        $data = user::find($id);
   
        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();

        return redirect('/admindashboard')->with('success', 'User updated successfully');
    }
}
