<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RStudentController extends Controller
{
    public function eventcreation(){
        return view('rstd_event_creation');
    }
    public function updateanevent(Request $request, $id){
        $data = user::find($id);

        $image = $request->image;

        if ($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imagename);
            $data->image = $imagename;
        }      

        $data->name = $request->name;
        $data->speciality = $request->speciality;


        $data->save();

        return redirect()->back();
    }
}
