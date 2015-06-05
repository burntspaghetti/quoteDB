@extends('master')
@section('content')

{{ Form::open([ 'action' => 'QuoteController@storeScrape', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

<table class="table table-striped">
    <thead>
        <tr>
            <th>Quote</th>
            <th>Approve</th>
        </tr>
    </thead>
    <tbody>
        <?php $x = 1;?>
    @foreach($quoteArray as $quote)
        <tr>
            <td>{{$quote}}</td>
            <td>{{Form::checkbox($x, $quote, true)}}</td>
        </tr>
        <?php $x++; ?>
    @endforeach
    </tbody>
</table>

{{ Form::hidden('idPersona', $idPersona) }}

<button class="btn btn-success" type="submit">Submit</button>
<a href="{{ action('HomeController@home') }}" class="btn btn-danger">Cancel</a>

{{ Form::close() }}

@endsection