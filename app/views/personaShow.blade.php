@extends('master')

@section('content')

    <h3>{{$persona->fName . " " . $persona->lName}}</h3>
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
                        <small>{{$quote->fName . " " . $quote->lName}} <cite title="Source Title">{{$quote->quoteSource1.", ".$quote->quoteSource2}}</cite></small>
                    </blockquote>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection
