@extends('layouts.blog')
@section('content')
<div class="container">
	<div class="row">
		<div class="portlet light">
            <div class="portlet-body">
                div class="row">
                    <div class="col-md-12 blog-page">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 article-block">
                                <h1 style="margin-top:0px">Latest Blog</h1>
                                  {{--@foreach( $blogs as $blog )--}}
                                <div class="row">
                                    <div class="col-md-4 blog-img blog-tag-data">
                                        <img src="../../assets/admin/pages/media/gallery/item_img.jpg" class="img-responsive" alt="">
                                        <ul class="list-inline">
                                            <li>
                                                <i class="fa fa-calendar"></i>
                                                <a href="javascript:;">
                                                April 16, 2013 </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i>
                                                <a href="javascript:;">
                                                38 Comments </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline blog-tags">
                                            <li>
                                                <i class="fa fa-tags"></i>
                                                <a href="javascript:;">
                                                Technology </a>
                                                <a href="javascript:;">
                                                Education </a>
                                                <a href="javascript:;">
                                                Internet </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 blog-article">
                                        <h3>
                                        <a href="page_blog_item.html">
                                        {{ $blog->title }} </a>
                                        </h3>
                                        <p>
                                        {{ $blog->description }}
                                        </p>
                                        <a class="btn blue" href="page_blog_item.html">
                                        Read more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            {{--@endforeach--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
