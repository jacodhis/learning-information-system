 
@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact information</div>

                <div class="card-body">
	 <form method="POST" action="/contact">
        {{ csrf_field()}}
            

<div class="form-group">
    <label for="p.o.box">P.O.BOX</label>
      <input type="text" name="box" class="form-control" >
</div>

<div class="form-group">
     <label for="phone">PHONE</label>
      <input type="text" name="phone" class="form-control" >
</div>

<div class="form-group">
     <label for="email">School Email</label>
      <input type="email" name="email" class="form-control" >
</div>

<div class="form-group">
    <label for="school_id">
        school id
    </label>
    <select class="form-control" name="school_id">
     @foreach($schools as $school)
        <option value="{{$school->id}}">{{$school->name}}</option>

    @endforeach 
    </select>
    
</div>
  

<button type="submit" name="submit" class="btn btn-outline-success">submit</button>


    </form>
	
</div>
</div>
</div>
</div>
</div>





@endsection


