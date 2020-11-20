<?php

namespace App\Http\Controllers;

use App\sport;
use App\comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addsportComment(Request $request,sport $sport)
    {
        $this->validate($request,[
         'body'=> 'required'
        ]);
       
        $comment = new comment();
        $comment->body = $request->input('body');
        $comment->user_id = auth()->user()->id;
        $sport->comments()->save($comment);

        return back()->with('success','sport commented');

    }
    public function replysportComment(Request $request,comment $reply){
      
        $this->validate($request,[
         'body'=> 'required'
        ]);
       
        $comment = new comment();
        $comment->body = $request->input('body');
        $comment->user_id = auth()->user()->id;
        $reply->comments()->save($comment);

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
        $comment = comment::find($id);
        dd($comment);
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
        $comment = comment::find($id);
        $comment->delete();
        return back()->with('success','deleted');
    }
}
