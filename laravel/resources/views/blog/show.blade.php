<h1>{{ $wp['data']->title }}</h1>
<p>{{ $wp['data']->text }}</p>
<p>{{ $wp['data']->created_at }}</p>

<form action="{{route('deleteblog', $wp['data']->id)}}" method="POST">
    <input type="submit" value="DELETE">
    @method('delete')
    @csrf
</form>

