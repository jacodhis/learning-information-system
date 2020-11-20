@extends('layouts.app')
@section('content')

{{-- {!!Form ::open(['action' =>['PostsController@update',$post->id],'method'=>'POST'])!!}
<div class="form-group">
   {{Form::label('title','Title')}}
   {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title'])}}

    {{Form::label('body','Body')}}
   {{Form::text('body',$post->body,['class'=>'form-control','placeholder'=>'body'])}}


</div>

{!!form::close()!!} --}}

<form action="/posts/{{$post->id}}" method="POST">
    @method('PATCH')
    @include('posts.form')
    @csrf
    
        <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


    </form> 



@endsection