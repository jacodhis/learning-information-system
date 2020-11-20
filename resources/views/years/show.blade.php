@extends('layouts.app')

@section('content')

<div class=" mr-3 ml-3" style="background-color: orange;">

<div class="row">
	  <div class="col-10">
        <h3 style="color: white; text-align: center;"><u>{{$program}}</u></h3>
           <div class="d-flex">
               <h3 class="mr-2">{{$year}}</h3>
               <h3>{{$semester}}</h3>
            </div>
          <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  </div> 
	  <div class="col-2"> 
	  	<ul>
                  <div class="list-unstyled py-2 ml-2 mr-2" style="background-color:white">
@if(!Auth::guest())
               @if(Auth::user()->role_id == '1')
	  		     <li><a href="/{{$program}}/{{$year}}/{{$semester}}/edit"> edit programe years</a></li><br>
	  		    @endif

	  		
	  			@if(Auth::user()->role_id == '2')
             <li>
	  			<a href="/{{$program}}/{{$year}}/{{$semester}}/assignment/create">Create Assignments</a>
	  		</li><br>
	  			@endif
	  		

           
	  		<li><a href="/{{$program}}/{{$year}}/{{$semester}}/assignments">View Assignments</a></li><br>
	  		<li><a href="/{{$program}}/{{$year}}/{{$semester}}/submittedassignments">Submitted Assignments</a></li><br>
	  		<li><a href="/{{$program}}/{{$year}}/{{$semester}}/notes/create">upload Notes</a></li><br>
	  		<li><a href="/{{$program}}/{{$year}}/{{$semester}}/notes">Notes</a></li>
             </div>
@endif
	  		
	  	</ul>
	  </div>
	</div>
</div>
@endsection