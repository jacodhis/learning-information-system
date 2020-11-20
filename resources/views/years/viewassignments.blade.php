@extends('layouts.app')

@section('content')
<div class="mr-3 ml-3" style="background-image: url('/images/tech1.jpg');">
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Assignments Posted</div>

                <div class="card-body">
                    @if($assignments)
                       @foreach($assignments as $assignment)
                  
                  <p>
                    <?php
               
                         $date_diff=$currentTime->diffInDays($assignment->created_at);
                         if($date_diff < 14) {
                           ?>

                        <h3><a href="/assignments/{{$assignment->id}}"> {{$assignment->title}}</a></h3>
                        <p>{{$assignment->description}} <samp> </samp> </p> 
                  
                        <!--    <small>time Created : {{$assignment->created_at}} </small> -->
                        <p>Day {{$date_diff}} ago</p>
                 
                    <?php 
                        }else{
                    // echo "past date";

                        } 
                    ?>
                        </p>
              
                           
                           @endforeach

                           @else
                           <p>No Assignment</p>

                           @endif

 
                 <!-- <br> <small>Current Date : {{ date('Y-m-d H:i:s') }}</small> -->
 
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
