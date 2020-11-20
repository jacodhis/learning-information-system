@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">upload notes for {{$program}} {{$year}} {{$semester}}</div>

                <div class="card-body">

<h3>{{$program}}</h3><samp>{{$year}}  {{$semester}}</samp>
		<h1>Create New notes</h1>
		
		<form method="POST" action="/{{$program}}/{{$year}}/{{$semester}}/notes" enctype="multipart/form-data" >
			{{ csrf_field()}}

			<div class="form-group">
                <input type="file" name="notes" >
             </div>
					<input type="submit" name="submit" class="btn btn-primary">
		</form>
	</div>
</div>
</div>
</div>

@endsection