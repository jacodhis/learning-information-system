@extends('layouts.app')

@section('content')

<div class=" mr-3 ml-3">
   		    	<div class="assignment container" >
              <h3 style="color: blue">{{$assignment->title}}</h3>
              <p>{{$assignment->description}} </p><samp>given by lecturer: {{$assignment->user->name}}</samp>


               
                 <h4 style="color: blue">Chart Zone/Comments</h4>
<div class="card" style="background-color: violet"> 
                 @foreach($assignment->coments as $coment) 
               
                 <div class="d-flex">

                   <p>{{$coment->body}}<b>.</b> by :: {{$coment->User->name}}-
                written {{$coment->created_at->diffForHumans()}} </p>
                   </div>      
                 @endforeach
               </div>
            </div>  		    
           @include('comments.addassignmentcoment')
         </div>
     
</div>
<div class="container">
  <p>Submit Assignment</p>
 <form action="/mywork" enctype="multipart/form-data" method="POST">
    @csrf


  <input type="hidden" name="assignment" value="{{$assignment->id}}">
  <!-- lecturers ID -->
  <input type="hidden" name="lec_id" value="{{$assignment->user->id}}">
  <!-- authenticated users id -->
   <input type="hidden" name="students_name" value=" {{Auth::user()->name}}">


    <label for="file">Upload Assignmets Here</label>
<input type = "file" name="image" class="btn btn-primary"/>
<input type="submit" name="submit" value="submit assignment" class="btn btn-primary">



</form>
</div>

@endsection
