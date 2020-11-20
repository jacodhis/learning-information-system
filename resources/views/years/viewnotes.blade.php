@extends('layouts.app')

@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">notes Uploaded</div>

                <div class="card-body">
                  
                   @foreach($notes as $note)
                   <h3><a href="/notes/{{$note->id}}"> {{$note->notes}}</a></h3> 
                   <p>uploaded by lecturer <b>:</b> {{$user->name}} <strong><b> ({{$user->email}})</b></strong></p>
                  
                    <small>{{$note->created_at}} </small>

                   <div class="container">


                       
                    </div>  

                   @endforeach


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
