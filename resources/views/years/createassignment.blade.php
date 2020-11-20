@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create Assignment for {{$program}} {{$year}} {{$semester}}</div>

                <div class="card-body">

<h3>{{$program}}</h3><samp>{{$year}}  {{$semester}}</samp>
		<h1>Create New Assignment</h1>
		<form method="POST" action="/{{$program}}/{{$year}}/{{$semester}}/assignments">
			{{ csrf_field()}}
			
			
			<div class="form-group">
				<label for="title">Assignment title</label>
				<input type="text" name="title" class="form-control" placeholder="enter title of your assignment/notes" required>

			</div>

			<div class="form-group">
				<label for="description">Assignment Description</label>
				<textarea class="form-control" cols="5" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			
			" name="description" required></textarea>
			</div>
					<input type="submit" name="" class="btn btn-primary">
		</form>
	</div>
</div>
</div>
</div>

@endsection