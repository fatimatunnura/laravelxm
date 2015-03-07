@extends('layouts.blog')
@section('content')
    <h2>Edit Blog</h2>
 
    {!! Form::model($blog, ['method' => 'PATCH', 'route' => ['blogs.update', $blog->id]]) !!}
        @include('blogs/partials/_form', ['submit_text' => 'Edit Blog'])
    {!! Form::close() !!}
@endsection