@extends('layouts.master')
@section('content')
{{ config('app.name') }}
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
                    <textarea name="text" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Post</button>
                </div>
            </form>
        </div>
        
        <section class="posts-listing">

            @foreach($wp['blogData'] as $blog)
            <article class="post-item" href="#">
                <a class="post-item__inner" href="#">

                    <div class="post-item__thumbnail-wrapper">
                        <div class="post-item__thumbnail" style="background-image:url(image_url.jpg);"></div>
                    </div>

                    <div class="post-item__content-wrapper">
                        <h2 class="post-item__title heading-size-4"><span>{{$blog->title}}}}</span></h2>
                    
                        <div class="post-item__metas">
                            <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00.00">{{$blog->created_at}}</time>
                            <p class="post-item__meta post-item__meta--category">Category</p>
                        </div>

                        <div class="post-item__excerpt">
                            {{$blog->text}}
                        </div>
                        
                        <div class="post-item__read-more-wrapper">
                            <a class="post-item__read-more" href="{{ route('showblog', $blog->id)}}">Read more</a>
                        </div>
                    </div>
                </a>
            </aritcle>
            @endforeach
        </section>
@endsection