@extends('layouts.app')

@section('content')
<div class="container">
	 <form action="{{route('users.update',[$user->id])}}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="_method" value="put">

    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" placeholder="school name" value="{{$user->name}}" >
</div>
 
<div class="form-group">
    <label for="name">Email</label>
    <input type="text" name="email" class="form-control" placeholder="school name" value="{{$user->email}}" >
</div>
<!-- <div class="form-group">
    <label for="name">School</label>
    <input type="text" name="name" class="form-control" placeholder="school_name" value="{{$user->school->name}}" >
</div>
 -->
<div class="form-group">
                <label for="department-content">Allocate School</label>
                <select name="school_id" class="form-control">
                    @foreach($schools as $school)
                    <option value="{{$school->id}}">{{$school->name}}</option>
                     @endforeach
                </select>
               
            </div>

<div class="form-group">
                <label for="department-content">Role ID</label>
                <select name="role_id" class="form-control">
                    @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                     @endforeach
                </select>
               
            </div>
<!-- 
<div class="form-group">
    <label for="name">Role</label>
    <input type="text" name="role_id" class="form-control" placeholder="school name" value="{{$user->role->name}}" >
</div> -->

<button type="submit" name="submit" class="btn btn-outline-success">submit</button>


    </form>
	
</div>

@endsection