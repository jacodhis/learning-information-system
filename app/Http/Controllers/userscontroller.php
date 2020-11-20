<?php

namespace App\Http\Controllers;

use App\User;
use App\unit;
use DB;
use App\school;
use App\role;
use Illuminate\Http\Request;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $users = DB::select("SELECT * FROM users
        //                 WHERE role_id = '2' ");
         $users = User::all();
         
               return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          // $schools = school::all();
          // return view('programes.create',compact('schools'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}
    public function store(Request $request)
    {
        // $programe_user = programe_user::create([
        //     'name' =>$request->input('name'),
        //     'description' =>$request->input('description'),
        //     'school_id' =>$request->input('school_id'),
        //      ]);
        // if ($programe) {
        //     return redirect('/schools')->with('success','programe created successfully');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
       return view('users.show',compact('user'));
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        //
         $schools = school::all();
         $roles = role::all();
        $user = User::find($user_id);
        return view('users.edit',compact('user','schools','roles'));
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
        
          $users = User::find($id)
                ->update([
                   'name' =>$request->input('name'),
                   'email' => $request->input('email'),
                   'role_id' =>$request->input('role_id'),
                   'school_id' =>$request->input('school_id'),

                ]);
               return back()->with('success','users table updated successfully'); 
    //      if($users) {
    //         return redirect('/schools')->with('success','users table updated successfully');
    // }
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
