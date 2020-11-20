@extends('layouts.app')

@section('content')
     
        <div class="section mr-3 ml-3">
            <section class="bg-dark " style="color: white" >

                  <h3 style="text-align: center;">{{$school->name}}</h3>
                   
            </section>

         <div class="row">
             <div class="col-md-6 col-sm-6 col-lg-12 py-1">
            
                    <!-- 
                    <div class="mr-2 ml-2">
             <div class="row">
             <div class="col-md-12 col-sm-12 col-lg-12 ">
                 <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                             <li data-target="#carousel" data-slide-to="2"></li> -->
                           
                        <!-- </ol> -->
                        <!-- <div class="carousel-inner "> -->

                            <!-- <div class="carousel-item"> -->
                                <!-- <img class="rounded d-block " src="/uploads//img/'.$school->image->image" style="width:100%; height: 350px;" alt="Second Image"> -->
                                <!-- <div class="carousel-caption"> -->
                                   <!-- <h3 style="color: blue;">Business School</h3>  -->
                                 <!-- </div> -->
                            <!-- </div> -->

                        <!-- </div> -->

                    <!-- </div> -->
             <!-- </div>            -->
         <!-- </div> -->
     <!-- </div> --> 

                      <p>
                        <img src="{{asset('uploads/img/'.$school->image->image)}}" style="width:100%; height: 300px;" >
                      </p>
                    </div>
                  </div>
                      @if(!Auth::guest())
                       @if(Auth::user()->role_id == '1')
                      <p>
                        <a href="#" onclick="
                           var result = confirm('are you sure you want to delete this image ??');
                           if(result){
                            event.preventDefault();
                            document.getElementById('delete-form').submit(); 
                            }
                         ">
                            delete image
                          </a>
                        </p>
                        @endif

             <form id="delete-form" method="POST" action="{{route('schoolimages.destroy',[$school->image->id])}}">
              @csrf
              @method('DELETE')
                    
             </form>
               @endif
  
                 <!--    </div>
                         <p class="ml-2">{{$school->description}}</p>
                   
                   </div>            
                   
                </div>
          -->
           <h2 style="text-align: center;">Programs offered in the {{$school->name}}</h2>
             
            <p>{{$school->name}} consists of {{$school->programes->count()}} programe(s). Department of Information Technology and Computer Science was recently split into two departments to facilitate growth and better management.</p>
            <div class="card" style="background-color: orange;">  
             <table class="table table-hover">
                <thead>
                    <tr>
                        <td style="color: white;">Programmes</td>
                        <!-- <td>lecturers</td> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($school->programes as $programe)
                     <tr>
                        <td><a href="/programes/{{$programe->id}}" style="color: white;  font-size: 120%" >{{$programe->name}}</a></td>
                       
                    </tr>
                    @endforeach
                   
                   
                </tbody>
             </table>
            </div>
            <br><br>

            <div class="row">
               
                    <div class="col-3 col-md-3 col-sm-3 col-lg-3 py-1">
                        <h4>School  Office </h4>
                        Contact Us
                       <p> P.O Box ,{{$school->contact->p_o_box}}</p>

                        <p>Phone: {{$school->contact->phone}}</p>

                        <p>Email: {{$school->contact->email}}</p>
                    </div>
                    <div class="col-3 col-md-3 col-sm-3 col-lg-3 py-1">
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    </div>
                    <div class="col-3 col-md-3 col-sm-3 col-lg-3 py-1">
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    </div>
                    <div class="col-3 col-md-3 col-sm-3 col-lg-3 py-1">
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    </div>
                          </div>
            
        </div>
  

       
     
    
      
@endsection