<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class RStudentController extends Controller
{
    public function rstddashboard(){
        $eventdata = Event::all();
        return view('rstd_dashboard', compact('eventdata'));
    }
    public function eventcreation(){
        return view('rstd_event_creation');
    }
    public function updateanevent(Request $request){
        $eventdata = new Event();    

        $eventdata->name = $request->eventName;
        $eventdata->faculty = $request->faculty;
        $eventdata->date = $request->date;
        $eventdata->venue = $request->venue;
        $eventdata->event_type = $request->event_type;
        $eventdata->is_approved = 0;

        $document = $request->proposal;

        if ($document) {
            $documentname = time().'.'.$document->getClientOriginalExtension();
            $request->proposal->move('proposaldocument',$documentname);
            $eventdata->proposal = $documentname;
        } 


        $eventdata->save();

        return redirect()->back();
    }
}
