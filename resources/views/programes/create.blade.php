@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3" style="background-image: url('/images/tech1.jpg'); height: 600px;">
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
            	
				 <div class="card-header">create programe </div>
					
               

                <div class="card-body">


		<h1>create new programe</h1>
		<form method="post" action="/programes">
			{{ csrf_field()}}
			
			
			<div class="form-group">
				<label for="name">name</label>
				<input type="text" name="name" placeholder="enter programe name" class="form-control" required="" >	
				
			</div>
			<div class="form-group">
				<label for="description">description</label>
				
				<textarea type="text" name="description" cols="5" rows="5" placeholder="describe programe" class="form-control" required=""></textarea>
			</div>
    
			
			<div class="form-group">
				<label for="department-content">select school</label>
				<select name="school_id" class="form-control">
					@foreach($schools as $school)
					<option value="{{$school->id}}">{{$school->name}}</option>
					@endforeach
				</select>
				
			</div>
			<input type="submit" name="" class="btn btn-primary">
		</form>
	</div>
</div>
</div>
</div>
</div>

@endsection