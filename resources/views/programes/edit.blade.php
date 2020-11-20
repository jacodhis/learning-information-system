@extends('layouts.app')

@section('content')
<div class="container">
	 <form action="{{route('programes.update',[$programe->id])}}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="_method" value="put">

    <div class="form-group">
    <label for="name">name</label>
    <input type="text" name="name" class="form-control" placeholder="programe name" value="{{$programe->name}}" >
</div>
 
<div class="form-group">
    <label for="description">description</label>
<textarea name="description" class="form-control" placeholder="text description" cols="5" rows="5" >
	{{$programe->description}}
</textarea>
</div>

    <div class="form-group">
                <label for="department-content">select school</label>
                <select name="school_id" class="form-control">
                    @foreach($schools as $school)
                    <option value="{{$school->id}}">{{$school->name}}</option>
                     @endforeach
                </select>
               
            </div>

<button type="submit" name="submit" class="btn btn-outline-success">submit</button>


    </form>
	
</div>

@endsection