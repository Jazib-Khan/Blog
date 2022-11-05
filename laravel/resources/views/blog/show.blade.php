<h1>{{ $wp['data']->title }}</h1>
<p>{{ $wp['data']->text }}</p>
<p>{{ $wp['data']->created_at }}</p>

<a href="{{ route('editBlog', $wp['data']->id )}}">EDIT BLOG</a>

<form action="{{route('deleteblog', $wp['data']->id)}}" method="POST">
    <input type="submit" value="DELETE">
    @method('delete')
    @csrf
</form>

