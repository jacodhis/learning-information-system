@extends('layouts.app')
@section('content')
<div class="container">
<h2>sports</h2>
@if(count($sports)>0)

@foreach($sports as $sport)
<div class="list-group">
    <div class="row">
        <div class = "col-md-8 col-sm-8">
            <h3 class="list-group-item"><a href="/sports/{{$sport->id}}">{{$sport->title}}</a> </h3>
              <small>written on {{$sport->created_at}} by {{$sport->user->name}}</small>
        </div>

    </div>

</div>

@endforeach

@else
<p>No sports found</p>


@endif
</div>
@endsection