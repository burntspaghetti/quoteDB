@extends('master')
@section('content')

{{ Form::open([ 'action' => 'QuoteController@storeScrape', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

<?php
    $x = 1;
?>
@foreach($quoteArray as $quote)
    <ul>
        <li>
            {{$quote}}
            {{Form::checkbox($x, $quote, true)}}
        </li>
    </ul>
    <?php
        $x++;
    ?>
@endforeach



<button class="btn btn-success" type="submit">Submit</button>
<a href="{{ action('HomeController@home') }}" class="btn btn-danger">Cancel</a>

{{ Form::close() }}

@endsection