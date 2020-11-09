<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Auth;
use Log;

class SubjectController extends Controller
{


    public function index()
    {
      
        $data = Subject::where('user_id', '=', Auth::id())->orderBy('id','ASC')->get();
        return view('subjects.index',compact('data'))->with('i');

    }
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'sub_name' => 'required',
   
            'sub_date' => 'required',

            'start_time' => 'required',

            'end_time' => 'required',
        ]);

        $id = Auth::id();
        $input = $request->all();
     
        $subjectss = Subject::create($input);
  
    

        $subjectss ->user_id = $id;
        $subjectss->save();

    
        return back();
                      
    }
}
