<?php

namespace App\Http\Controllers;

use App\school;
use App\role;

use Illuminate\Http\Request;

class schoolscontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $schools = school::all();
        return view('schools.index',compact('schools')); 
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
                return view('schools.create');
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
         $this->validate($request,[
             'name' => 'required',
             'description' => 'required',
 ]);
         $school = new school;
         $school->name = $request->input('name');
         $school->description = $request->input('description');
        
         $school->save();

         return redirect('/schools')->with('success','school created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = school::find($id);
          // $role_id = role::find(1)->id;

        return view('schools.show',compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = school::find($id);
         return view('schools.edit',compact('school'));
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
         $school = school::find($id)
                ->update([
                   'name' =>$request->input('name'),
                   'description' =>$request->input('description'),
                ]);
         if($school) {
            return redirect('/schools')->with('success','school updated successfully');
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
        //
    }
}
