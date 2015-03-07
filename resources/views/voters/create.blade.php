@extends('app')
 
@section('content')
    <h2>Add voters</h2>
 
    {!! Form::model(new App\Voter, ['route' => ['voters.store']]) !!}
        @include('voters/partials/_form', ['submit_text' => 'Add voters'])
    {!! Form::close() !!}
@endsection
 