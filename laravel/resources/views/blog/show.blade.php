@extends('layouts.master')
@section('show')

<div class="container">
    <div class="Box">
        <div class="container">

            <h1>{{ $wp['data']->title }}</h1>
            <p>{{ $wp['data']->text }}</p>
            <p>{{ $wp['data']->created_at }}</p>

            <form action="{{ route('editBlog', $wp['data']->id )}}">
                <div>
                    <input type="submit" value="EDIT">
                </div>
            </form>

            <form action="{{route('deleteblog', $wp['data']->id)}}" method="POST">
                <input type="submit" value="DELETE">
                @method('delete')
                @csrf
            </form>

        </div>
    </div>
</div>

@endsection


