 <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Title"  value="{{old('title') ?? $sport->title}}">
</div>
 
<div class="form-group">
    <label for="body">Body</label>
<textarea name="body" class="form-control" placeholder="text body"  value="{{old('body') ?? $sport->body}}"></textarea>
</div>

