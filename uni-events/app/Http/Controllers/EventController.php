<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function approve(Request $request, $id){
        $eventdata = Event::find($id);
        if ($eventdata) {
            $eventdata->is_approved = 1;
            $eventdata->instructions = $request->instructions;
            $eventdata->save();
            return redirect()->back()->with('success','Event approved successfully.');
        }
        return redirect()->back()->with('error','Event not found');

    }

    public function reject(Request $request, $id){
        $eventdata = Event::find($id);
        dd($eventdata->proposal);
        if ($eventdata) {
            $eventdata->is_approved = 0;
            $eventdata->instructions = $request->input('instructions');
            $eventdata->save();
            return redirect()->back()->with('success','Event rejected successfully.');
        }
        return redirect()->back()->with('error','Event not found');

    }
}
