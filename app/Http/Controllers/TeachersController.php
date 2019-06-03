<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=Teacher::where('is_active',1)->get();
       
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teacher::create(request()->validate([
            'name'=>'required|min:3',
        'speciality'=>'required|min:3',
        'institution'=>'required|min:3',
        'is_active'=>'required'
        ]));

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {        
       return view('teacher.show', compact('teacher'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $teacher=Teacher::find($id);
        
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $teacher=Teacher::find($id);
       
        $teacher->update(request()->validate([
        'name'=>'required|min:3',
        'speciality'=>'required|min:3',
        'institution'=>'required|min:3',
        'is_active'=>'required'
        ]));

        return redirect('/');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {       
        $teacher->delete();

        return redirect('/');
    }

    public function createSubjectForTeacher(Teacher $teacher)
    {
        return view('teacher.createSubjectForTeacher',compact('teacher'));
    }
}
