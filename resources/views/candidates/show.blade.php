@extends('app')
 
@section('content')
    <h2>
        {!! link_to_route('voters.show', $voter->voter_name, [$voter->id]) !!} -
        {{ $candidate->candidate_name }}
    </h2>
 
    {{ $candidate->candidate_name }}
@endsection