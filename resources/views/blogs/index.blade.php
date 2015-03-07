@extends('layouts.blog')
@section('content')
    <h2>Blog</h2>
 
    @if ( !$blogs->count() )
        You have no blog
    @else
        <ul>
            @foreach( $blogs as $blog )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('blogs.destroy',$blog->id))) !!}
                        <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>

                        (
                            {!! link_to_route('blogs.edit', 'Edit', array($blog->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    <p>
        {!! link_to_route('blogs.create', 'Create Blog') !!}<br>
    </p>
@endsection
 