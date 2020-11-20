<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\submit;
use App\User;
use App\school;
use App\assignment;
use App\assigno;

class submitassignmentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //view submitted assignments
                
                //compare if auth user== lecture viewing the assignment
           $user_id =  auth()->user()->id ;
           
           // $assigno = assigno::find();

           // if($user_id == ){

           //      }

         $submittedassignments = assigno::all();
         // dd($submittedassignments);
         // dd($submittedassignments);
         // if($lec_id == $user_id){}

         // $submitted_assignments = assigno::where('lec_id','$user_id');
         // dd($submittedassignments);
         // ;
        return view('submittedassignments.index',compact('submittedassignments','user_id')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
      //   // form for uploading assignments
      //   // $lecturers = User::where('role_id','2');
      // $lecturers = DB::select("SELECT * FROM users
      //                  WHERE role_id = '2' ");
      //  // dd($lecturers);

      //  $schools = DB::select("SELECT * FROM schools");
      //  // dd($schools);
      // // dd($lecturers);

      
      //   return view('submitassignments.create',compact('id','lecturers','schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store submitted assignments
      

        
             $submittedass= $request->input('assignment');
              $lec_id= $request->input('lec_id');
                $students_name= $request->input('students_name');

          $sub = new assigno;
          $sub->assignment_id =  $submittedass;
          $sub->user_id =  $lec_id;
           $sub->students_name =  $students_name;

            
          if($request->hasfile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' .$ext;
            $file->move('uploads/submittedassignments/',$filename);
            $sub->image = $filename;
        }else{
            return $request;
            $sub->image = 'noimage.jpg';
        }

            $sub->save();

            return redirect('/mywork')->with('assignment submitted successfully');


           
            // $assignment = assignment::find($submittedass);
            
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $assigno = assigno::find($id);
        // dd($assigno);
    return view('submittedassignments.show',compact('assigno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
