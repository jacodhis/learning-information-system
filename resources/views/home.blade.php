@extends('layouts.app')

@section('content')
<style type="text/css">
  
</style>
<div class="mr-3 ml-3" style="background-image:url('images/tech1.jpg'); height: 500px;" >
    <div class="row justify-content-center  py-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{Auth::user()->name}}</div>

                <div class="card-body" style="background-color: aqua;">
                 <!-- <div class="mr-2 ml-2" style=""> -->
                   @if(!Auth::guest())

                       @if(Auth::user()->role_id == '1')
                       <!-- admin -->

                       <p> <a href="/users"  style="color: black;">users information</a></p>
                       
                        <p><a href="/schools" class="#" style="color: black">View schools</a></p>
                         <p><a href="/schools/create" class="#" style="color: black">Add New School</a></p>
                        <p><a href="/contact/create" class="#" style="color: black">add school contact</a></p>
                       <!--  <p><a href="/allocate_school" class="#">Allocate School</a></p> -->
                        <p><a href="/schoolimages/create" class="#" style="color: black">add school image</a></p>
                        <p><a href="/years/create" style="color: black"> add years</a></p>
                        <p><a href="/programes/create" style="color: black">Add programe</a></p>
          

                   @elseif(Auth::user()->role_id == '2')

                  <!--  <p><a href="/schools">schools</a></p> -->
                   <p> <a href="/schools/{{Auth::User()->school->id}}" style="color: black">{{Auth::User()->school->name}}</a></p>
                      <!-- <p><a href="/mywork">Submitted Assignmets</a></p> -->
                    </div>
                          </div>
 
                    @elseif(Auth::user()->role_id == '3')

                      <!--  <p> <a href="/schools">Go To Schools</a></p> -->
                        <p> <a href="/schools/{{Auth::User()->school->id}}" style="color: black">{{Auth::User()->school->name}}</a></p>
                       <!-- @foreach(Auth::user()->programes as $programe)
                         <a href="/programes/{{$programe->id}}"> <p>{{$programe->name}}</p></a>

                       @endforeach
 -->
                     <!--   <p><a href="/mywork/{{Auth::user()->id}}">Submit Assignments</a></p> -->

                    

                         <!-- @foreach(Auth::user()->programes as $programe) -->

                     <!-- <a href="/programes/{{$programe->id}}"> <p>{{$programe->name}}</p> -->

                    <!-- @endforeach -->
                    
                    @endif
                
                              @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
