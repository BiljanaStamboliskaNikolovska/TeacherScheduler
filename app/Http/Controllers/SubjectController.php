<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Teacher;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject=Subject::where('has_occured',1)->get();

        return view('subject.indexSubject', compact('subject'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Subject $subject)
    {
        $teachers=Teacher::where('is_active',1)->get();
        
        return view('subject.createSubject', compact('teachers', 'subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subject $subject)
    {    
        $hasOccured=0;   

        $request->validate([
            'room_name' => 'required|max:255',
            'date'=>'required',
            'time_from' => 'required',
            'time_to' => 'required',
            'teacher_id' => 'required',
        ]);

        if ($request->has_occured == 'on') {
            $hasOccured=1;
        }      
        Subject::create([
            'room_name'=>$request->room_name,
            'date'=>$request->date,
            'time_from'=>$request->time_from,
            'time_to'=>$request->time_to,
            'has_occured'=> $hasOccured,
            'teacher_id'=>$request->teacher_id,
        ]);
       
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {        
        return view('subject.showSubject',compact('subject'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subject.editSubject', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subject=Subject::find($id);

        $subject->update(request()->validate([
            'room_name'=>'required|min:3',
            'date'=>'required',
            'time_from'=>'required',
            'time_to'=>'required',
        ]));

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySubject(Subject $subject)
    { 
        $subject->delete();

        return redirect('/');
    }
}
