@extends('layouts.blog')
@section('content')
    <div class="portlet light">
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-12 blog-page">
                    <div class="row">
                        <div class="col-md-9 article-block">
                         {{--@foreach( $blogs as $blog )--}}
                            <h3 style="margin-top:0;">{{ $blog->title }} </h3>
                            <div class="blog-tag-data">
                                <img src="../../assets/admin/pages/media/gallery/item_img.jpg" class="img-responsive" alt="">
                                <div class="row">
                                    <div class="col-md-6">
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
                                    <div class="col-md-6 blog-tag-data-inner">
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
                                    </div>
                                </div>
                            </div>
                            <!--end news-tag-data-->
                            <div>
                                {{ $blog->description }}

                            </div>
                {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

