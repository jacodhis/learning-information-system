@extends('layouts.app')
@section('content')
<div class="container">
 <form action="/sports" method="POST">
    @csrf
    @include('sports.form')
   
        <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


    </form>
</div>



@endsection