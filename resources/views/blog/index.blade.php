@extends('layouts.blog')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="portlet light">
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12 blog-page">
                                <div class="row">
                                    <div class="col-md-9 col-sm-8 article-block">
                                        <h1 style="margin-top:0px">Latest Blog</h1>
                                        @foreach( $blogs as $blog )
                                        <div class="row">
                                            <div class="col-md-4 blog-img blog-tag-data">
                                                <img src="../../assets/admin/pages/media/gallery/image4.jpg" alt="" class="img-responsive">
                                                <ul class="list-inline">
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <a href="javascript:;">
                                                        {{ $blog->created_at }} </a>
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
                                                <a  href="{{ route('blogs.show', $blog->id) }}">
                                               {{ $blog->title }}</a>
                                                </h3>
                                                <p>
                                                {{--{{ $blog->description }}--}}
                                                {{ substr($blog->description, 0, 400).' ......' }}
                                                </p>
                                                <a class="btn blue" href="{{ route('blogs.show', $blog->id) }}">
                                                 Read more <i class="m-icon-swapright m-icon-white"></i>
                                                 </a>
                                            </div>
                                        </div>

                                        @endforeach

                                        </div>

                                         @include('blog.widget.relatedblogs')


                                                @include('widget.flickr')

                                                    <div class="space20">
                                                    </div>



                                                @include('widget.tabs')



                                                @include('widget.twits')



                                                @include('blog.widget.pagination')
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>

   @endsection
