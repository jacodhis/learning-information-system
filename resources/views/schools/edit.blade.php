@extends('layouts.app')

@section('content')
<div class="container">
	 <form action="{{route('schools.update',[$school->id])}}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="_method" value="put">

    <div class="form-group">
    <label for="name">name</label>
    <input type="text" name="name" class="form-control" placeholder="school name" value="{{$school->name}}" >
</div>
 
<div class="form-group">
    <label for="description">description</label>
<textarea name="description" class="form-control" placeholder="text description" cols="5" rows="5" >
	{{$school->description}}
</textarea>
</div>

<button type="submit" name="submit" class="btn btn-outline-success">submit</button>


    </form>
	
</div>

@endsection