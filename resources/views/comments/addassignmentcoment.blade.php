


<div class="container">
<div class="card ">
	<div class="card-block">
		<form action="/coments/create/{{$assignment->id}}" method="post">
			@csrf
			<div class="form-group">
				<label for="comment">Comment</label>
				<input type="text" name="body" placeholder="enter comment" class="form-control" >
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-primary">comment</button>
		</div>
		</form>
	</div>
</div>

</div>

