@extends('master')
@section('test')
    <h3 align="center">{{$query}}</h3>


    <table id="table_id" class="table">
        <thead>
        <tr>
            <th>Quote</th>
        </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
                {{--<div class="col-lg-6">--}}
                    {{--<div class="bs-component">--}}
                <tr>
                    <td>
                        <blockquote>
                            <p>{{$quote->quoteText}}</p>
                            <small>{{$quote->fName . " " . $quote->lName}} <cite title="Source Title">{{$quote->quoteSource1.", ".$quote->quoteSource2}}</cite></small>
                        </blockquote>
                    </td>
                </tr>
                    {{--</div>--}}
                {{--</div>--}}
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