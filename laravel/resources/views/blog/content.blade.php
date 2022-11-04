@extends('layouts.master')
@section('content')
{{ config('app.name') }}
        <section class="posts-listings">

            <form action="" method="post">
                <input type="text" name="title" placeholder="Add blog title">
                <textarea name="text" cols="30" rows="10"></textarea>
            </form>

            <article class="post-item" href="#">
                <a class="post-item__inner" href="#">

                <div class="post-item__thumbnail-wrapper">
                    <div class="post-item__thumbnail" style="background-image:url(image_url.jpg);"></div>
                </div>

                <div class="post-item__content-wrapper">
                    <h2 class="post-item__title heading-size-4"><span>Testing testing testing testing</span></h2>
                
                    <div class="post-item__metas">
                        <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00.00">Feburary 14, 2022<,
                        <p class="post-item__meta post-item__meta--category">Category</p>
                    </div>

                    <div class="post-item__excerpt">
                        blah blah blah
                    
                    <div class="post-item__read-more-wrapper">
                        <p class="post-item__read-more">Read more</p>
                    </div>
                </div>
                </a>
            </aritcle>
        </section>
@endsection