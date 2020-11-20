<?php

namespace App\Http\Controllers;

use App\school;
use App\image;
use App\role;
use Illuminate\Http\Request;

class imagescontroller extends Controller
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
        $images = image::all();
        return $images;
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
             return view('images.create',compact('schools'));
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

        $role_id = role::find(1)->id;
            if(auth()->user()->role_id == $role_id) { 

        $this->validate($request, [
            'image' => 'required|image|max:1999',
            
        ]);

        $image = new image;
        $image->school_id = $request->input('school_id');
        
    
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' .$ext;
            $file->move('uploads/img/',$filename);
            $image->image = $filename;
        }else{
            return $request;
            $images->image = 'noimage.jpg';
        }
        // $image->user_id = auth()->user()->id;
        $image->save();
        return redirect('/schools')->with('success','image added successfully');
    }else{
        return redirect('/schools')->with('error','Unauthorized Page');
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
        //
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
        $image = image::find($id);
         $role_id = role::find(1)->id;
            if(auth()->user()->role_id == $role_id) {  
            $image->delete();
            return redirect('/schools')->with('success','image successfully deleted');
            }else{
             return redirect('/schools')->with('error','Unauthorized Page');
            }
    }
}
