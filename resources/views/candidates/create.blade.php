@extends('app')
 
@section('content')
    <h2>Add voters for candidate "{{ $voter->voter_name }}"</h2>
 
    {!! Form::model(new App\Candidate, ['route' => ['voters.candidates.store', $voter->id], 'class'=>'']) !!}
        @include('candidates/partials/_form', ['submit_text' => 'ADd voters'])
    {!! Form::close() !!}
@endsection