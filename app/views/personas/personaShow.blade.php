@extends('master')

@section('content')
    <div align="center">
        <br>
        <h3>{{$persona->fName . " " . $persona->lName}}</h3>
        <hr/>
        <br>
        <div class="btn-group" role="group" aria-label="...">
            <a href="{{ action('QuoteController@create', $persona->idPersona) }}" class="btn btn-default">New Quote</a>
            <a href="{{ action('PersonaController@edit', $persona->idPersona) }}" class="btn btn-default">Edit Persona</a>
            <a href="{{ action('QuoteController@scraper', $persona->idPersona) }}" class="btn btn-default">Scraper</a>
            <a href="#bottom" class="btn btn-default">Down &nbsp;<i class="fa fa-arrow-down fa-2"></i></a>
        </div>
        <br>
        <br>
    </div>

    <table id="table_id" class="table">
        <thead>
        <tr>
            <th>Quotes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($quotes as $quote)
            <tr>
                <td>
                    <blockquote>
                        <p>{{$quote->quoteText}}</p>
                        @if($quote->quoteSource1 && $quote->quoteSource2)
                            <small>{{$quote->fName . " " . $quote->lName}} <cite title="Source Title">{{$quote->quoteSource1.", ".$quote->quoteSource2}}</cite></small>
                        @elseif($quote->quoteSource1)
                            <small>{{$quote->fName . " " . $quote->lName}} <cite title="Source Title">{{$quote->quoteSource1}}</cite></small>
                        @elseif(!$quote->quoteSource1 && !$quote->quoteSource2)
                            <small>
                                <cite title="Source Title">
                                    <a href="{{ action('QuoteController@edit', array($persona->idPersona, $quote->idQuote)) }}">citation</a>
                                </cite>
                            </small>
                        @endif
                        <br>
                    </blockquote>
                    <div class="pull-right">
                        <small><a href="{{ action('QuoteController@edit', array($persona->idPersona, $quote->idQuote)) }}">edit</a></small>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
<div id="bottom">

</div>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable(
                    {
                        "iDisplayLength": 100
                    }
            );
        } );
    </script>
@endsection
