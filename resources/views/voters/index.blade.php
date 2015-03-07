@extends('app')
 
@section('content')
    <h2>Voters</h2>
 
    @if ( !$voters->count() )
       There is no voters!!!
    @else
        <ul>
            @foreach( $voters as $voter )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('voters.destroy', $voter->id))) !!}
                        <a href="{{ route('voters.show', $voter->id) }}">{{ $voter->voter_name }}</a>
                        (
                            {!! link_to_route('voters.edit', 'Edit', array($voter->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('voters.create', 'Add voters') !!}
    </p>
@endsection