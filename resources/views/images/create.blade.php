 
@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create image</div>

                <div class="card-body">
	 <form method="POST" action="/schoolimages" enctype="multipart/form-data" >
        {{ csrf_field()}}
            

<div class="form-group">
      <input type="file" name="image" >
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


