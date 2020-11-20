 
@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3 " style="background-image: url('/images/tech1.jpg'); height: 500px;">
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create School</div>

                <div class="card-body">
	 <form action="/schools" enctype="multipart/form-data" method="POST">
    @csrf

    <div class="form-group">
    <label for="name">name</label>
    <input type="text" name="name" class="form-control" placeholder="school name"  >
</div>
 
<div class="form-group">
    <label for="description">description</label>
<textarea name="description" class="form-control" placeholder="text description"></textarea>
</div>

<button type="submit" name="submit" class="btn btn-outline-success">submit</button>


    </form>
	
</div>
</div>
</div>
</div>
</div>





@endsection


