@extends('app')
 
@section('content')
    <h2>{{ $voter->voter_name }}</h2>
 
    @if ( !$voter->candidates->count() )
       There is no candidates!!!
    @else
        <ul>
            @foreach( $voter->candidates as $candidate )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('voters.candidates.destroy', $voter->id, $candidate->id))) !!}
                        <a href="{{ route('voters.candidates.show', [$voter->id, $candidate->id]) }}">{{ $candidate->candidate_name }}</a>
                        (
                            {!! link_to_route('voters.candidates.edit', 'Edit', array($voter->id, $candidate->id), array('class' => 'btn btn-info')) !!},
 
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('voters.index', 'Back') !!} |
        {!! link_to_route('voters.candidates.create', 'Add candidate', $voter->id) !!}
    </p>
@endsection