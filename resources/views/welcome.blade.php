@extends('layouts.app')

@section('content')
<div class="outside-container" style="background-color: #">
<div class="mr-2 ml-2">
  <div class="row">
             <div class="col-md-12 col-sm-12 col-lg-12 ">
                 <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <!-- <li data-target="#carousel" data-slide-to="2"></li> -->
                           
                        </ol>
                        <div class="carousel-inner ">

                            <div class="carousel-item active">
                                <img class="rounded d-block " src="images/tech3.jpg" style="width:100%; height: 350px;" alt="First Image">
                                 <div class="carousel-caption">
                                   <h3>Computing</h3> 
                                 </div>
      
                            </div>

                            <div class="carousel-item">
                                <img class="rounded d-block " src="images/my-account.jpg" style="width:100%; height: 350px;" alt="Second Image">
                                <div class="carousel-caption">
                                   <h3 style="color: blue;">Business School</h3> 
                                 </div>
                            </div>

                        </div>

                    </div>
             </div>           
         </div>
     </div>
 </div>
    <h3 style="text-align: center;">MERU UNIVERSITY OF SCIENCE AND TECHNOLOGY STAFF</h3>
 <div class="row mr-1 ml-1 jumbotron">

    <div class="col-md-3 ">
    <h4>VC MUST</h4>
 <img src="images/Prof.-Romanus-Odhiambo-Ph.D.jpg" class="py-2" width="200" height="200">
 <p>Prof Romanus Odhiambo</p>
 <p>I am extremely honored and happy to welcome you to this institution of excellence; Meru University of Science and Technology (MUST). We highly appreciate you taking the time to visit our website.</p>
   </div>

   <div class="col-md-3">
    <h4>Ass Vice Chancellor</h4>
 <img src="images/my-account.jpg" class="py-2" width="200" height="200">
 <p>I am extremely honored and happy to welcome you to this institution of excellence; Meru University of Science and Technology (MUST). We highly appreciate you taking the time to visit our website.</p>
</div>

   <div class="col-md-3">
    <h4 >jack odhiambo</h4>
 <img src="images/my-account.jpg" class="py-2" width="200" height="200">
 <p>I am extremely honored and happy to welcome you to this institution of excellence; Meru University of Science and Technology (MUST). We highly appreciate you taking the time to visit our website.</p>
   </div>
   
   <div class="col-md-3">
    <h4 >jack odhiambo</h4>
 <img src="images/my-account.jpg" class="py-2" width="200" height="200">
 <p>I am extremely honored and happy to welcome you to this institution of excellence; Meru University of Science and Technology (MUST). We highly appreciate you taking the time to visit our website.</p>
   </div>

    </div> 
  <!--   <script>
      function getUs(title,name){
        this.title = title;
        this.Location = Location;

        getUs.prototype.getDetails = function () {
          return  this.name
        }

        getUs.prototype.getlocation = function () {
          return  this.Location;
        }

      }
      
    </script> -->
          
  <div class="mr-2 ml-2" style="background-image: url('images/tech2.jpg'); height: 100px;"> 
     <div class="row">
    
    <div class="col-md-3">
      <h3 style="color: white;" id="twitter">
      
            Must on Twitter


      </h3>
      <p style="color: white;">tweets byMeru University</p>
    </div>
    <div class="col-md-3"><h3 style="color: white;">MUST on Facebook</h3></div>
    
    <div class="col-md-3"><h3><a href="/contact" style="color: orange;">Contact Us</a></h3></div>
    
    <div class="col-md-3"><h3 style="color: white;"> Location</h3></div>
    
</div>
  </div>
        
    <!-- <div class="mr-2 ml-2" style="background-color: turquoise">          -->
       
</div>

@endsection
