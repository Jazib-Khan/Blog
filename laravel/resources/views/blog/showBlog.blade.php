<form action="{{ route('editBlogPost',$wp['data']->id)}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="title" value="{{ $wp['data']->title}}" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <textarea name="text" cols="30" rows="10" class="form-control">{{ $wp['data']->text }}</textarea>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Edit</button>
    </div>
</form>