@extends('layouts.app')
@section('content')
<div class="container">
<a href="/sports" class="btn btn-default">Go Back</a>
my post
<h2>{{$sport->title}}</h2>
<p>{{$sport->body}}</p><br>	
<small>written on {{$sport->created_at->diffForHumans()}} by {{$sport->user->name}}</small>
	
<hr>
<div class="container">
     @foreach($sport->comments as $comment)
      <h5>comments</h5>
        <p>{{$comment->body}} by {{$comment->User->name}}</p>	
        <div class="container">
		   @foreach($comment->comments as $reply)
		     <p><small>{{$reply->body}} :by {{$reply->User->name}}</small> ( {{$reply->created_at->diffForHumans()}})</p>	
		 
		       @include('comments.editdelete')
		   @endforeach
	    </div>	
	      	@include('comments.replycomment')
       @endforeach
   </div>



@include('comments.addcomment')


@endsection