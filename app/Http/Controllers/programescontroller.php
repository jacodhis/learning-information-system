<?php

namespace App\Http\Controllers;

use App\school;
use App\programe;
use App\role;
use App\User;
use Illuminate\Http\Request;

class programescontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role_id = role::find(1)->id;
            if(auth()->user()->role_id == $role_id) { 
             $schools = school::all();
              return view('programes.create',compact('schools'));
              }else{
            return redirect('/schools')->with('error','Unauthorized Page');
             }
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               $programe = programe::create([
            'name' =>$request->input('name'),
            'description' =>$request->input('description'),
            'school_id' =>$request->input('school_id'),
             ]);
        if ($programe) {
            return redirect('/schools')->with('success','programe created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $programe = programe::find($id);
        
         $lecturers = $programe->users->where('role_id','2');
         
         
         return view('programes.show',compact('programe','lecturers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $programe = programe::find($id);
         $role_id = role::find(1)->id;
        if(auth()->user()->role_id == $role_id) {          
           $schools = school::all();
            return view('programes.edit',compact('programe','schools'));
        }else{
             return redirect('/schools')->with('error','Unauthorized Page');
        }
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
         $programe = programe::find($id)
                ->update([
                   'name' =>$request->input('name'),
                   'description' =>$request->input('description'),
                   'school_id' =>$request->input('school_id'),

                ]);
         if($programe) {
            return redirect('/schools')->with('success','programe updated successfully');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $programe = programe::find($id);
           $role_id = role::find(1)->id;
            if(auth()->user()->role_id == $role_id) {      
             $programe->delete();
              return redirect('/schools')->with('success','programe deleted successfully');
          }else{
             return redirect('/schools')->with('error','Unauthorized Page');
        }
    
    }
}
