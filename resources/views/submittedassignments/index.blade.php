@extends('layouts.app')

@section('content')

<div class="container">
    
    @foreach($submittedassignments as $submittedassignment)
    <!-- <p>{{$submittedassignment->user->name}}</p> --> 
    @endforeach 

     @if($submittedassignment->user_id == $user_id)
        <p><u>{{$submittedassignment->assignment->title}}</u></p>
       
     @endif

      <!-- @foreach($submittedassignments as $submittedassignment) -->
            @if($submittedassignment->user_id == $user_id)
      
             <ol type="1">
       
             <li><a href="/pdf/{{$submittedassignment->id}}"> {{$submittedassignment->students_name}}</a></li>
             <!-- <li>{{$submittedassignment}}</li> -->
             </ol>
             

            @endif
     
          <!-- @endforeach  -->
   <!--  @if($user_id == $submittedassignment->user_id)
         
         <p>Submitted Assignments</p>
       
         
 
<div class="row">
   
         @foreach($submittedassignments as $submittedassignment)
          <div class="col-md-4">
        <ul>
            <li><a href="">{{$submittedassignment->students_name}}</a></li>
        </ul>

    </div>
    @endforeach
   -->
<!-- </div>

@else

<?php
// header('location: schools');
?> -->
<!-- @endif -->
  
   
<!-- 
    
<ol type="1">
    <li>jack</li>
    <li>sammy</li>
    <li>beryl</li>
</ol> -->


   
</div>
@endsection
