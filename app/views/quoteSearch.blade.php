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
                            <small>{{$personaArray[$quote->idPersona]->fName . " " . $personaArray[$quote->idPersona]->lName}} <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                    </td>
                </tr>
                    {{--</div>--}}
                {{--</div>--}}
            @endforeach

        </tbody>
    </table>


    {{--<div class="row">--}}
        {{--@foreach($quotes as $quote)--}}
            {{--<div class="col-lg-6">--}}
                {{--<div class="bs-component">--}}
                    {{--<blockquote>--}}
                        {{--<p>{{$quote->quoteText}}</p>--}}
                        {{--<small>{{$personaArray[$quote->idPersona]->fName . " " . $personaArray[$quote->idPersona]->lName}} <cite title="Source Title">Source Title</cite></small>--}}
                    {{--</blockquote>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection