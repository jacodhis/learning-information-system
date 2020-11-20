@extends('layouts.app')

@section('content')

<div class=" mr-3 ml-3">
   <p>
    <div>
      <a href="/">back</a>
    </div>
                        <img src="{{asset('uploads/submittedassignments/'.$assigno->image)}}" style="width:100%; height: 300px;" >
                      </p>
</div>
@endsection
