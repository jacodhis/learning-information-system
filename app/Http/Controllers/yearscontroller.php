<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\assignment;
use App\programe;
use App\year;
use DB;
use App\role;
use App\User;
use App\note;
use Illuminate\Http\Request;

class yearscontroller extends Controller
{    
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {
         $programe = programe::find($id);
         return $programe;
          // return view('years.edit',compact('programe'));
    }
    public function update($id)
    {
        // $programe = programe::find($id);
        // return $programe;
          // return view('years.edit',compact('programe'));
    }

    public function create()
    {
         $role_id = role::find(1)->id;
            if(auth()->user()->role_id == $role_id) {   
              $programes = programe::all();
              return view('years.create',compact('programes'));
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
               $year = year::create([
            'name' =>$request->input('name'),
            'semester_a' =>$request->input('semester_a'),
            'semester_b' =>$request->input('semester_b'),
            'programe_id' =>$request->input('programe_id')
             ]);
        if ($year) {
            return redirect('/schools')->with('success','programe created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($program,$year,$semester)
    {

        return view('years.show',compact('program','year','semester'));
    }
    // public function editprogyearsem($program,$year,$semester)
    // {
    //         $programes = programe::all();
          
    //     return view('years.editprogyearsem',compact('programes','program','year','semester'));
    // }
    //  public function updateprogyearsem($program,$year,$semester)
    // {
    //        return $program; 
    //     // return view('years.editprogyearsem',compact('program','year','semester'));
    // }
   

     //create notes
     public function createnotes($program,$year,$semester)
    {
        $role_id = role::find(2)->id;

        if(auth()->user()->role_id !== $role_id) {
            return redirect('/home')->with('error','Unauthorized Page');
        }else{
          return view('years.createnotes',compact('program','year','semester'));
              }
        }
    
    //store notes
     public function notes(Request $request ,$program,$year,$semester)
    {
         $role_id = role::find(2)->id;

         if(auth()->user()->role_id == $role_id){

      
  if($request->hasfile('notes')) {
            $file = $request->file('notes');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' .$ext;
            $file->move('uploads/Notes/',$filename);

             $notes = new note;
             $notes->notes = $filename;

          
        }else{
            return $request;
            $notes->notes = 'noimage.jpg';
        }



        $notes->program = $program;
        $notes->year = $year;
        $notes->semester = $semester;
        $notes->user_id = auth()->user()->id;
        $notes->save();
          return back()->with('success','notes uploaded successfully');
      
         }else{
           return redirect('/')->with('error','Unauthorized Page');
         }      

    }
    //display notes
     public function viewnotes($program,$year,$semester)
    {
      
        $notes = DB::select("SELECT * FROM notes
                        WHERE program = '$program' AND (year='$year' AND semester='$semester')");
      foreach ($notes as $note) {
          $note_user_id = $note->user_id;
      }
      $user = User::find($note_user_id);
      // $user_name = $user->name;
      // $user_email = $user->email;


        return view('years.viewnotes',compact('notes','user'));
    }
    //Assignments functions

    //display assignments
     public function viewassignments($program,$year,$semester)
    {
        $currentTime = Carbon::now();
     
        $assignments = DB::select("SELECT * FROM assignments
                        WHERE program = '$program' AND (year='$year' AND semester='$semester') ORDER BY title DESC ");

        // foreach($assignments as $assignment){
        //      $startTime = Carbon::parse($assignment->created_at);
        //     $date_diff=$currentTime->diffForHumans($startTime); 
           
           
        // }
        
            return view('years.viewassignments',compact('assignments','currentTime'));
    }
    //create Assignments
     public function createassignment($program,$year,$semester)
    {
        $role_id = role::find(2)->id;

        if(auth()->user()->role_id !== $role_id) {
            return redirect('/schools')->with('error','Unauthorized Page');
        }else{
          return view('years.createassignment',compact('program','year','semester'));
              }
        }
    //store assignments
     public function assignments(Request $request ,$program,$year,$semester)
    {
        $role_id = role::find(2)->id;

          if(auth()->user()->role_id == $role_id){

            $this->validate($request,[
             'title' => 'required',
             'description' => 'required',
            ]);
         $assignments = new assignment;
         $assignments->title = $request->input('title');
         $assignments->description = $request->input('description');
         $assignments->program = $program;
         $assignments->year = $year;
         $assignments->semester = $semester;

         $assignments->user_id = auth()->user()->id;
        
         $assignments->save();
          return back()->with('success','assignment posted successfully');
      
        }else{
          return redirect('/schools')->with('error','Unauthorized Page');
        }

        

         
      
         

    }
    
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
        //
    }
}
