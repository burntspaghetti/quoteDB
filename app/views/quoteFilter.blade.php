@extends('master')
@section('content')

    @foreach($quoteArray as $quote)
        <ul>
            <li>
                {{$quote}}
            </li>
        </ul>
    @endforeach

@endsection