<?php

namespace App\Http\Controllers;

use App\coment;
use App\assignment;
use Illuminate\Http\Request;

class comentscontroller extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addassignmentcoment(Request $request,assignment $assignment)
    {
        $this->validate($request,[
         'body'=> 'required'
        ]);
       
        $coment = new coment();
        $coment->body = $request->input('body');
        $coment->user_id = auth()->user()->id;

        $assignment->coments()->save($coment);

        return back()->with('success','assignment commented');

    }
    public function replyassignmentcoment(Request $request,comment $reply){
      
        $this->validate($request,[
         'body'=> 'required'
        ]);
       
        $coment = new coment();
        $coment->body = $request->input('body');
        $coment->user_id = auth()->user()->id;
        $reply->comments()->save($coment);

        return back()->with('success','reply posted');

    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $coment = coment::find($id);
        dd($coment);
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
        $coment = coment::find($id);
        $coment->delete();
        return back()->with('success','deleted');
    }
}
