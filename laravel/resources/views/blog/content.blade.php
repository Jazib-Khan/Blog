@extends('layouts.master')
@section('content')
    <div class="container">
        <center>
            @if(Session::has('message'))
                <p class="alert alert-info"> {{ Session::get('message') }} </p>
            @endif
        </center>
        <form action="{{ route('addblog') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="title" placeholder="Add blog title" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <textarea name="text" cols="30" rows="10" class="form-control" placeholder="Add blog content"></textarea>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Post</button>
            </div>
        </form>
    </div>
        
    @foreach ($wp['blogData'] as $blog)
        <br>
        <a href="#">
            {{$blog->title}}
                <div >
                    <div>
                        <time datetime="2022-02-14T20:24:54+00.00">{{$blog->created_at}}</time>
                    </div>

                    <div>
                        {{$blog->text}}
                    </div>
                        
                    <div>
                        <a href="{{ route('showblog', $blog->id)}}">Read more</a>
                    </div>
                </div>
        </a>
    @endforeach
@endsection