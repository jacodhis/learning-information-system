@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3" style="background-image: url('/images/tech3.jpg');">
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create years for a programe</div>

                <div class="card-body">


		<h1>create programe years</h1>
		<form method="post" action="/years">
			{{ csrf_field()}}
			
			
			<div class="form-group">
				<label for="name">programe year</label>
				
				<select name="name" class="form-control">
				 <option value="1" disabled="">select year</option>
					
					<option value="year_1">year 1</option>
						<option value="year_2">year 2</option>
							<option value="year_3">year 3</option>
								<option value="year_4">year 4</option>
							</select>
			</div>

			<div class="form-group">
				<label for="semester_a">semester_a</label>
				<select name="semester_a" class="form-control">					
					<option value="semester_1">semester 1</option>
							</select>
			</div>
			<div class="form-group">
				<label for="semester_b">semester_b</label>
				<select name="semester_b" class="form-control">					
					<option value="semester_2">semester 2</option>
							</select>
			</div>
    
			
			<div class="form-group">
				<label for="department-content">select department</label>
				<select name="programe_id" class="form-control">
					@foreach($programes as $programe)
					<option value="{{$programe->id}}">{{$programe->name}}</option>
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