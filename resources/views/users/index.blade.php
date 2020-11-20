@extends('layouts.app')

@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{Auth::user()->name}}</div>


                <div class="card-body">
                		<table class="table"  border="1" >
                		<tr>
                			<td>names</td>
                			<td>emails</td>
                			<td>role</td>
                            <td>School</td>
                            <td>Update</td>
                			
                		</tr>
                		@foreach($users as $user)
                

                		<tr>
                			<td><a href="users/{{$user->id}}">{{$user->name}}</a></td>
                			<td>{{$user->email}}</td>
                			<td>{{$user->role->name}}</td>
                            <td>{{$user->school->name}}</td>
                            <td><a href="/edit_info/{{$user->id}}"> update Information </a></td>
                			
                		
                		</tr>

                    @endforeach
                
                	</table>
    
                  <!-- 
                    @foreach(Auth::user()->programes as $programe)

                     <a href="/programes/{{$programe->id}}"> <p>{{$programe->name}}</p>
                    @endforeach -->
                 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
