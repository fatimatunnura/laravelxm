@extends('app')
 
@section('content')
    <h2>Elactions</h2>
     @if ( !$voters->count() )
        There is no voter!!!
    @else
        <ul>
            @foreach( $voters as $voter )
                <li><a href="{{ route('voters.show', $voter->slug) }}">{{ $voter->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection