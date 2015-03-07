@extends('app')
 
@section('content')
    <h2>Edit Selection "{{ $candidate->candidate_name }}"</h2>
 
    {!! Form::model($candidate, ['method' => 'PATCH', 'route' => ['voters.candidates.update', $voter->id, $candidate->id]]) !!}
        @include('candidates/partials/_form', ['submit_text' => 'Edit Selection'])
    {!! Form::close() !!}
@endsection