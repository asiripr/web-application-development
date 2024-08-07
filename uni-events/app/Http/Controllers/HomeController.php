<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function about(){
        $authdata = Auth::user();
        return view('about',compact("authdata"));
    }
    public function home(){
        $authdata = Auth::user();
        $eventdata = Event::all();
        return view('home',compact("authdata","eventdata"));
    }
    public function eventlist(){
        $authdata = Auth::user();
        return view('eventlist',compact("authdata"));
    }

    public function search(Request $request){
        $output = '';
        $myevent = Event::where('name','Like','%'.$request->search.'%')->orWhere('faculty','Like','%'.$request->search.'%')->orWhere('venue','Like','%'.$request->search.'%')->orWhere('event_type','Like','%'.$request->search.'%')->get();
        
        foreach ($myevent as $mevent) {
            $output.=
            '<tr>
                <td>'.$mevent->name.'</td>
                <td>'.$mevent->faculty.'</td>
                <td>'.$mevent->date.'</td>
                <td>'.$mevent->venue.'</td>
                <td>'.$mevent->event_type.'</td>
            </tr>
            ';
        }
        return response($output);
    }
}
