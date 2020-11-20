@if(!Auth::guest())
@if(Auth::user()->id == $reply->user_id)
<div class="d-flex">
		     	<a href="/comments/{{$reply->id}}/edit" class="btn btn-primary btn-sm mr-3">Edit</a>
                  <form  action="/comments/{{$reply->id}}" method="POST" >
                   @csrf
                   @method('delete')
                   <input type="submit" class="btn btn-danger btn-sm" value="DELETE">
                 </form>
		       </div>
@endif
@else
<p>pnot authorized</p>
@endif