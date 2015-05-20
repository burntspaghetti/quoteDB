@extends('master')

@section('content')
    <div align="center">
        <h3>{{$persona->fName . " " . $persona->lName}}</h3>
        <br>
        <a href="{{ action('QuoteController@create', $persona->idPersona) }}" class="btn btn-primary">New Quote</a>
        <br>
        <br>
        <a href="{{ action('PersonaController@edit', $persona->idPersona) }}">Edit Persona</a>
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
