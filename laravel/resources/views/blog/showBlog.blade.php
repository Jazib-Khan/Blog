@extends('layouts.master')
@section('showBlog')

<div class="container">
    <div class="Box">
        <div class="container">

            <form action="{{ route('editBlogPost',$wp['data']->id)}}" method="post">
                @csrf
                <div >
                    <input type="text" name="title" value="{{ $wp['data']->title}}">
                </div>
                <br>
                <div>
                    <textarea name="text" cols="30" rows="10">{{ $wp['data']->text }}</textarea>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection