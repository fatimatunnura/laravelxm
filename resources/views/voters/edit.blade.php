@extends('app')
 
@section('content')
    <h2>Edit Selection</h2>
 
    {!! Form::model($voter, ['method' => 'PATCH', 'route' => ['voters.update', $voter->id]]) !!}
        @include('voters/partials/_form', ['submit_text' => 'Edit Selection'])
    {!! Form::close() !!}
@endsection