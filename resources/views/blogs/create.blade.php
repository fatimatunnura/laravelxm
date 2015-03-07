@extends('layouts.blog')
@section('content')

<div class="page-content">
<div class="container">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="tab-content">
            <div class="tab-pane active" id="tab_0">
                <div class="portlet box blue-hoki">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Form Actions On Top
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="javascript:;" class="form-horizontal">
                            <div class="form-actions top">
                                <div class="row">

                                </div>
                            </div>
                        </form>

                        <div class="form-body">
                            {!! Form::model(new App\Blog, ['route' => ['blogs.store']]) !!}
                            @include('blogs/partials/_form', ['submit_text' => 'Create Blog'])
                            {!! Form::close() !!}

                        </div>
                    </div>
                    </form>
                    <!-- END FORM-->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
<p>
 <ul>
    @foreach($errors->all as $error)
    <li>{{$error}}</li>
    @endforeach
 </ul>
</p>
