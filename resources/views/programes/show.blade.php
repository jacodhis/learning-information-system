@extends('layouts.app')

@section('content')

<div class=" mr-3 ml-3" style="background-color: orange;">
	
    <div class="row col-12">
   	    <div class="col-10 col-sm-10 col-md-10 col-lg-10">
   		   <h3 style="color: white; text-align: center;"><u>{{$programe->name}}</u></h3>
           <p>{{$programe->description}}</p>  

           <div class="row">
           	 

           	  	@foreach($programe->years as $year)
           	  	<div class="col-3">
           	  	<h2 style="color: white;">{{$year->name}}</h2>
           	  	<ul class="list-unstyled">
           	  		<li><a href="/{{$programe->name}}/{{$year->name}}/{{$year->semester_a}}" style="color: black;">{{$year->semester_a}}</a></li>
           	  		<li><a href="/{{$programe->name}}/{{$year->name}}/{{$year->semester_b}}" style="color: black;"> {{$year->semester_b}}</a></li>
           	  	</ul>
           	  		 </div>
           	  	@endforeach
               
           	 
           </div>
             <div class="card">
             <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Lecturers in {{$programe->name}}</td>
                        <td>Gender</td>
                        <td>Title</td>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($lecturers as $lecturer)
                     <tr>
                        <td><a href="#">{{$lecturer->name}}</a></td>
                       
                    </tr>
                    @endforeach
                   
                   
                </tbody>
             </table>
            </div>
   	    </div>
@if(!Auth::guest())
   	    <div class="col-2 col-sm-2 col-md-2 col-lg-2">
   		    <ul class="list-unstyled">
       @if(Auth::user()->role_id == '1')
   		    	<li><a href="/programes/{{$programe->id}}/edit">edit programe</a></li>
           <li>
          <a href="#" onclick="

            var result = confirm('are you sure you want to delete this programe ??');
            if(result){
               event.preventDefault();
               document.getElementById('delete-form').submit();
                           
              }
              ">
              delete Programe
                
             </a>
             <form id="delete-form" method="POST" action="{{route('programes.destroy',[$programe->id])}}">
              @csrf
              @method('DELETE')
                    
             </form>
          </li>
          @endif

            
              
   		    	
   		    </ul>
   	    </div>
        @else
        <ul>
          <li>home</li>
          <li>about</li>
        </ul>
@endif
       
    </div>
</div>


@endsection
