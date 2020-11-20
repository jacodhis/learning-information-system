@extends('layouts.app')

@section('content')
<div class="container">

 <form method="POST" action="/products-table" files="true">
        {{ csrf_field()}}

     <div class="form-group">
        <label for="">title</label>
        <input type="text" name="title" class="form-control input-sm">
    </div>

    <div class="form-group">
        <label for="">published</label>
        <input type="checkbox" name="published"  value="l">
    </div>
      
      <button class="btn btn-default">Submit</button>
</form>
  
</div>
@endsection
