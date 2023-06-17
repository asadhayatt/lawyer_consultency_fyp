@extends('layouts.web_layout')

@section('title','Blog')

@section('content')
    
<section class="blog_area pb-xl-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row blog_left_sidebar">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_item">
                            <div class="blog_post">
                                <img src="{{ asset('web_asset/img/blog/main-blog/m-blog-1.jpg') }}" alt="">
                                <div class="blog_details">
                                    <a href="{{ url('blog-detail') }}">
                                        <h2>Astronomy Binoculars A Great Alternative</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a class="button button-blog" href="{{ url('blog-detail') }}">View More</a>
                                </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_item">
                            <div class="blog_post">
                                <img src="{{ asset('web_asset/img/blog/main-blog/m-blog-2.jpg') }}" alt="">
                                <div class="blog_details">
                                    <a href="{{ url('blog-detail') }}">
                                        <h2>The Basics Of Buying A Telescope</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="{{ url('blog-detail') }}" class="button button-blog">View More</a>
                                </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_item">
                            <div class="blog_post">
                                <img src="{{ asset('web_asset/img/blog/main-blog/m-blog-3.jpg') }}" alt="">
                                <div class="blog_details">
                                    <a href="{{ url('blog-detail') }}">
                                        <h2>The Glossary Of Telescopes</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="{{ url('blog-detail') }}" class="button button-blog">View More</a>
                                </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_item">
                            <div class="blog_post">
                                <img src="{{ asset('web_asset/img/blog/main-blog/m-blog-4.jpg') }}" alt="">
                                <div class="blog_details">
                                    <a href="{{ url('blog-detail') }}">
                                        <h2>The Doctors</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="{{ url('blog-detail') }}" class="button button-blog">View More</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection