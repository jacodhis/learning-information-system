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
                			<th>names</th>
                			<th>units Assigned</th>
                			<th>programes</th>
                		
                			
                		</tr>
                		

                		<tr>
                			<td><a href="users/{{$user->id}}">{{$user->name}}</a></td>
                			
                			<td><a href="/units/{{$user->units->count()}}">{{$user->units->count()}} units</a></td>
                			
                			<td>{{$user->programes->count()}} programs</td>
                			
                		
                		</tr>

               
                
                	</table>
  
                 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
