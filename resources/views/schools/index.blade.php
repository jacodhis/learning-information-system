@extends('layouts.app')

@section('content')
<div style="background-image: url('images/tech1.jpg'); height: 500px;" class="mr-1 ml-1 py-2" >
<div class="container" style="background-color: white;">

         <div class="row">
             
    @foreach($schools as $school)
  
  <div class="col-md-4 col-sm-4 col-lg-4 py-1">
    <ul class="list-unstyled">    	 
          <li><a href="/schools/{{$school->id}}" style="font-size: 125%" > {{$school->name}}</a></li>
        </ul>
    </div>
  
    @endforeach
   </div>

 </div> 
 </div>
@endsection
  

       
     
    