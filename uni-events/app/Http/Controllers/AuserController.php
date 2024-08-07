<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\fileExists;

class AuserController extends Controller
{
    public function auserdashboard(){
        $eventdata = Event::all();
        return view('auser_dashboard',compact("eventdata"));
    }
    public function downloadproposal($id){
        $eventdata = Event::find($id);
        $filepath = public_path('proposaldocument/' . $eventdata->proposal);
        
        if (fileExists($filepath)) {
            return response()->download($filepath);
        }else{
            Log::error('File not found: ' . $filepath);
            return redirect()->back()->with('error','Sorry! File Not Found');
        }
    }
}
