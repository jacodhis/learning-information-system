<?php

namespace App\Http\Controllers;

use App\sport;
use Illuminate\Http\Request;

class SportsController extends Controller
{ 
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
     
        $sports =  sport::orderBy('created_at', 'desc')->get();
        return view('sports.index',[
            'sports'=>$sports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sport = new sport;
        return view('sports.create',compact('sport'));
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
             'title' => 'required',
             'body' => 'required',
 ]);

         $sport = new sport;
         $sport->title = $request->input('title');
         $sport->body = $request->input('body');
         $sport->user_id = auth()->user()->id;
        
         $sport->save();

         return redirect('/sports')->with('success','sport created');
         

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $sport = sport::find($id);
      return view('sports.show',[
          'sport' =>$sport
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $sport = sport::find($id);
        //check for correct user
        if(auth()->user()->id !== $sport->user_id){
            return redirect('/sports')->with('error','Unauthorized Page');
        }
        return view('sports.edit',[
            'sport'=>$sport,
            
        ]);
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
        $this->validate($request, [
            'title' => 'required',
           
        ]);

        
        $sport =sport::find($id);
        $sport->title = $request->input('title');
        $sport->body = $request->input('body');
       
        $sport->save();

        return redirect('/sports')->with('success', 'sport Updated');
         

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sport = sport::find($id);
        if (auth()->user()->id !== $sport->user_id) {
            return redirect('/sports')->with('error', 'Unauthorized Page');
        }
    
        $sport->delete();
        return redirect('/sports')->with('success','sport removed');

    }
}
